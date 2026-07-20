<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Brand;
use App\Models\Faq;
use App\Models\GalleryItem;
use App\Models\Privacy;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceArea;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $areas = ServiceArea::where('status', 1)->get();
        $posts = BlogPost::where('status', 1)->latest()->take(3)->get();
        $items = GalleryItem::where('status', 1)->get();
        $reviews = Review::where('status', 1)->get();
        $faqs = Faq::where('status', 1)->orderBy('sort_order')->get();
        return view('front.home.index', compact('services', 'brands', 'areas', 'posts', 'items', 'reviews', 'faqs'));
    }

    public function services()
    {
        $services = Service::where('status', 1)->get();
        return view('front.pages.services', compact('services'));
    }

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function brands()
    {
        $brands = Brand::where('status', 1)->get();
        return view('front.pages.brands', compact('brands'));
    }

    public function serviceAreas()
    {
        $areas = ServiceArea::where('status', 1)->get();
        return view('front.pages.service-areas', compact('areas'));
    }

    public function blog()
    {
        $posts = BlogPost::where('status', 1)->latest()->paginate(9);
        $recentPosts = BlogPost::where('status', 1)->latest()->take(5)->get();
        return view('front.pages.blog', compact('posts', 'recentPosts'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->where('status', 1)->firstOrFail();
        $others = Service::where('slug', '!=', $slug)->where('status', 1)->take(4)->get();
        return view('front.pages.service-detail', compact('service', 'others'));
    }

    public function blogDetail($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('status', 1)->firstOrFail();
        $recentPosts = BlogPost::where('status', 1)->where('slug', '!=', $slug)->latest()->take(5)->get();
        return view('front.pages.blog-detail', compact('post', 'recentPosts'));
    }

    public function aboutUs()
    {
        return view('front.pages.about');
    }

    public function contactUs()
    {
        return view('front.pages.contact');
    }

    public function privacy()
    {
        $privacy = Privacy::latest()->first();
        return view('front.privacy.privacy', compact('privacy'));
    }

    public function condition()
    {
        $condition = Privacy::latest()->first();
        return view('front.privacy.conditions', compact('condition'));
    }
}
