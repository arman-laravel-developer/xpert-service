<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('sort_order', 'asc')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function edit($id)
    {
        $faqs = Faq::orderBy('sort_order', 'asc')->get();
        $editItem = Faq::find($id);
        return view('admin.faq.index', compact('faqs', 'editItem'));
    }

    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->sort_order = $request->sort_order ?? 0;
        if ($request->status) { $faq->status = $request->status; } else { $faq->status = 0; }
        $faq->save();
        Alert::success('FAQ Added Successfully');
        return redirect()->route('faq.index');
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->sort_order = $request->sort_order ?? 0;
        if ($request->status) { $faq->status = $request->status; } else { $faq->status = 0; }
        $faq->save();
        Alert::success('FAQ Updated Successfully');
        return redirect()->route('faq.index');
    }

    public function destroy($id)
    {
        Faq::find($id)->delete();
        Alert::success('FAQ Deleted Successfully');
        return redirect()->back();
    }
}
