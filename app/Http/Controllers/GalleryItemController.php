<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryItemController extends Controller
{
    public function getImageUrl($request)
    {
        $image = $request->file('image');
        $imageName = 'gallery-'.time().'.'.$image->getClientOriginalExtension();
        $directory = 'gallery-images/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function index()
    {
        $items = GalleryItem::orderBy('id', 'desc')->get();
        return view('admin.gallery-item.index', compact('items'));
    }

    public function edit($id)
    {
        $items = GalleryItem::orderBy('id', 'desc')->get();
        $editItem = GalleryItem::find($id);
        return view('admin.gallery-item.index', compact('items', 'editItem'));
    }

    public function store(Request $request)
    {
        $item = new GalleryItem();
        if ($request->file('image')) {
            $item->image = $this->getImageUrl($request);
        }
        $item->alt_text = $request->alt_text;
        $item->category = $request->category;
        if ($request->status) { $item->status = $request->status; } else { $item->status = 0; }
        $item->save();
        Alert::success('Gallery Item Added Successfully');
        return redirect()->route('gallery-item.index');
    }

    public function update(Request $request, $id)
    {
        $item = GalleryItem::find($id);
        if ($request->file('image')) {
            if (file_exists($item->image)) { unlink($item->image); }
            $item->image = $this->getImageUrl($request);
        }
        $item->alt_text = $request->alt_text;
        $item->category = $request->category;
        if ($request->status) { $item->status = $request->status; } else { $item->status = 0; }
        $item->save();
        Alert::success('Gallery Item Updated Successfully');
        return redirect()->route('gallery-item.index');
    }

    public function destroy($id)
    {
        $item = GalleryItem::find($id);
        if (file_exists($item->image)) { unlink($item->image); }
        $item->delete();
        Alert::success('Gallery Item Deleted Successfully');
        return redirect()->back();
    }
}
