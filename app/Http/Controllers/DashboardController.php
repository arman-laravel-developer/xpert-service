<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Customer;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Session;
use function Ramsey\Collection\offer;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
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
