<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Brand;
use App\Models\ServiceArea;
use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\Review;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        $data['totalServices'] = Service::count();
        $data['totalBrands'] = Brand::count();
        $data['totalServiceAreas'] = ServiceArea::count();
        $data['totalBlogPosts'] = BlogPost::count();
        $data['totalGalleryItems'] = GalleryItem::count();
        $data['totalReviews'] = Review::count();
        $data['totalFaqs'] = Faq::count();
        $data['totalContactQueries'] = ContactForm::count();
        $data['totalUsers'] = User::count();
        $data['recentServices'] = Service::latest()->take(5)->get();
        $data['recentBlogPosts'] = BlogPost::latest()->take(5)->get();
        $data['recentContactQueries'] = ContactForm::latest()->take(5)->get();
        return view('admin.home.index', $data);
    }

    public function testMail(Request $request)
    {
        if (env('MAIL_USERNAME') != null) {
            $data['email'] = $request->email;

            Mail::send('emails.test-mail', ['data' => $data], function ($message) use ($data){
                $message->to($data['email'])->subject('test mail');
            });
        }

        flash()->success('Test Mail', 'Test mail send successfull');
        return redirect()->back();
    }

    public function contactFormShow()
    {
        $contactForms = ContactForm::latest()->paginate(20);
        return view('admin.contact-form.index', compact('contactForms'));
    }

    public function contactFormDetail($id)
    {
        $contactFormDetail = ContactForm::find($id);
        if ($contactFormDetail->read_status == 2)
        {
            $contactFormDetail->read_status = 1;
            $contactFormDetail->save();
        }
        return view('admin.contact-form.detail', compact('contactFormDetail'));
    }

    public function contactFormReplay(Request $request, $id)
    {
        $contactFormDetail = ContactForm::find($id);
        if ($contactFormDetail->replay_status == 2)
        {
            $contactFormDetail->replay_status = 1;
            $contactFormDetail->replay = $request->replay;
            $contactFormDetail->save();
            if (env('MAIL_USERNAME') != null) {
                $data['email'] = $request->toEmail;
                $data['replay'] = $request->replay;
                $data['subject'] = $request->subject;

                Mail::send('emails.replay-mail', ['data' => $data], function ($message) use ($data){
                    $message->to($data['email'])->subject($data['subject']);
                });
                flash()->success('Contact form replay', 'Contact form replay send successfull');
            }
        }
        flash()->success('Contact form replay', 'Contact form replay save successfull');
        return redirect()->back();
    }


}
