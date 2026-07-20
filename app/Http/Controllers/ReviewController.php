<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'desc')->get();
        return view('admin.review.index', compact('reviews'));
    }

    public function edit($id)
    {
        $reviews = Review::orderBy('id', 'desc')->get();
        $editItem = Review::find($id);
        return view('admin.review.index', compact('reviews', 'editItem'));
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->location = $request->location;
        $review->rating = $request->rating ?? 5;
        $review->content = $request->content;
        if ($request->status) { $review->status = $request->status; } else { $review->status = 0; }
        $review->save();
        Alert::success('Review Added Successfully');
        return redirect()->route('review.index');
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->name = $request->name;
        $review->location = $request->location;
        $review->rating = $request->rating ?? 5;
        $review->content = $request->content;
        if ($request->status) { $review->status = $request->status; } else { $review->status = 0; }
        $review->save();
        Alert::success('Review Updated Successfully');
        return redirect()->route('review.index');
    }

    public function destroy($id)
    {
        Review::find($id)->delete();
        Alert::success('Review Deleted Successfully');
        return redirect()->back();
    }
}
