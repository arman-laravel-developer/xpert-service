/* ================================
   INITIALIZATION
   ================================ */
document.addEventListener('DOMContentLoaded', function () {

  // AOS Animation Init
  AOS.init({
    duration: 400,
    easing: 'ease-out',
    once: true,
    offset: 0,
    delay: 0
  });

  // Navbar scroll effect
  const navbar = document.getElementById('mainNav');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  });

  // Active nav link on scroll
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  function updateActiveLink() {
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 150;
      const sectionHeight = section.offsetHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('active');
      }
    });
  }

  window.addEventListener('scroll', updateActiveLink);

  // Close mobile menu on link click
  const navCollapse = document.querySelector('.navbar-collapse');
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
      if (bsCollapse) bsCollapse.hide();
    });
  });

  /* ================================
     CONTACT FORM
     ================================ */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = document.getElementById('name').value.trim();
      const phone = document.getElementById('phone').value.trim();
      const service = document.getElementById('serviceType').value;
      const message = document.getElementById('message').value.trim();

      // Validate required fields
      if (!name) {
        showToast('দয়া করে আপনার নাম লিখুন', 'error');
        document.getElementById('name').focus();
        return;
      }
      if (!phone) {
        showToast('দয়া করে আপনার মোবাইল নাম্বার লিখুন', 'error');
        document.getElementById('phone').focus();
        return;
      }
      if (!/^(\+?88)?01[3-9]\d{8}$/.test(phone.replace(/[\s-]/g, ''))) {
        showToast('দয়া করে সঠিক মোবাইল নাম্বার দিন', 'error');
        document.getElementById('phone').focus();
        return;
      }

      // Build WhatsApp message
      let whatsappMsg = `*Xpert Service BD - New Service Request*%0A%0A`;
      whatsappMsg += `*Name:* ${name}%0A`;
      whatsappMsg += `*Phone:* ${phone}%0A`;
      if (service) whatsappMsg += `*Service:* ${service}%0A`;
      if (message) whatsappMsg += `*Message:* ${message}%0A`;
      whatsappMsg += `%0A_Sent from website_`;

      const whatsappURL = `https://wa.me/8801723456789?text=${whatsappMsg}`;
      window.open(whatsappURL, '_blank');

      showToast('WhatsApp খুলছে...', 'success');
      contactForm.reset();
    });
  }

  /* ================================
     TOAST NOTIFICATION
     ================================ */
  function showToast(msg, type) {
    const existing = document.querySelector('.custom-toast');
    if (existing) existing.remove();

    const toast = document.createElement('div');
    toast.className = 'custom-toast';
    toast.innerHTML = msg;
    if (type === 'error') {
      toast.style.background = '#dc2626';
    } else {
      toast.style.background = '#10b981';
    }
    document.body.appendChild(toast);

    requestAnimationFrame(() => {
      toast.style.transform = 'translateX(-50%) translateY(0)';
      toast.style.opacity = '1';
    });

    setTimeout(() => {
      toast.style.transform = 'translateX(-50%) translateY(-20px)';
      toast.style.opacity = '0';
      setTimeout(() => toast.remove(), 400);
    }, 3000);
  }

  /* ================================
     GALLERY LIGHTBOX (Simple)
     ================================ */
  const galleryItems = document.querySelectorAll('.gallery-item');
  if (galleryItems.length > 0) {
    // Simple lightbox without external dependency
    galleryItems.forEach(item => {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        const href = this.getAttribute('href');
        const alt = this.querySelector('img')?.getAttribute('alt') || 'Gallery Image';

        const overlay = document.createElement('div');
        overlay.className = 'lightbox-overlay';
        overlay.innerHTML = `
          <div class="lightbox-content">
            <span class="lightbox-close">&times;</span>
            <img src="${href}" alt="${alt}">
          </div>
        `;
        document.body.appendChild(overlay);
        document.body.style.overflow = 'hidden';

        overlay.addEventListener('click', function (e) {
          if (e.target === overlay || e.target.classList.contains('lightbox-close')) {
            overlay.remove();
            document.body.style.overflow = '';
          }
        });

        // Keyboard close
        const keyHandler = function (e) {
          if (e.key === 'Escape') {
            overlay.remove();
            document.body.style.overflow = '';
            document.removeEventListener('keydown', keyHandler);
          }
        };
        document.addEventListener('keydown', keyHandler);
      });
    });
  }

  /* ================================
     SMOOTH SCROLL FOR ANCHOR LINKS
     ================================ */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const offsetTop = target.offsetTop - 80;
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });

  /* ================================
     LAZY LOAD IMAGES FALLBACK
     ================================ */
  if ('loading' in HTMLImageElement.prototype) {
    // Native lazy loading already set in HTML
  } else {
    // Simple fallback - load all images
    document.querySelectorAll('img[loading="lazy"]').forEach(img => {
      img.src = img.src;
    });
  }

});

// Inject lightbox styles dynamically
const lightboxStyles = document.createElement('style');
lightboxStyles.textContent = `
  .lightbox-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: fadeIn 0.3s ease;
  }
  .lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
  }
  .lightbox-content img {
    max-width: 100%;
    max-height: 85vh;
    border-radius: 8px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.5);
  }
  .lightbox-close {
    position: absolute;
    top: -40px;
    right: 0;
    color: #fff;
    font-size: 2.5rem;
    cursor: pointer;
    line-height: 1;
    transition: 0.3s;
  }
  .lightbox-close:hover {
    color: #ff6b00;
  }
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  .custom-toast {
    position: fixed;
    bottom: 80px;
    left: 50%;
    transform: translateX(-50%) translateY(-20px);
    background: #10b981;
    color: #fff;
    padding: 14px 28px;
    border-radius: 50px;
    font-family: 'Noto Sans Bengali', sans-serif;
    font-size: 0.95rem;
    font-weight: 500;
    z-index: 99999;
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    opacity: 0;
    transition: all 0.4s ease;
    white-space: nowrap;
  }
  @media (max-width: 576px) {
    .custom-toast { white-space: normal; max-width: 85%; text-align: center; }
  }
`;
document.head.appendChild(lightboxStyles);
