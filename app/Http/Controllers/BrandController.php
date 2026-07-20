<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    public function getImageUrl($request)
    {
        $slug = Str::slug($request->name);
        $image = $request->file('image');
        $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
        $directory = 'brand-images/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brand.index', compact('brands'));
    }

    public function edit($id)
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        $editItem = Brand::find($id);
        return view('admin.brand.index', compact('brands', 'editItem'));
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->description = $request->description;
        if ($request->file('image')) {
            $brand->image = $this->getImageUrl($request);
        }
        if ($request->status) { $brand->status = $request->status; } else { $brand->status = 0; }
        $brand->save();
        Alert::success('Brand Added Successfully');
        return redirect()->route('brand.index');
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->description = $request->description;
        if ($request->file('image')) {
            if (file_exists($brand->image)) { unlink($brand->image); }
            $brand->image = $this->getImageUrl($request);
        }
        if ($request->status) { $brand->status = $request->status; } else { $brand->status = 0; }
        $brand->save();
        Alert::success('Brand Updated Successfully');
        return redirect()->route('brand.index');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        if (file_exists($brand->image)) { unlink($brand->image); }
        $brand->delete();
        Alert::success('Brand Deleted Successfully');
        return redirect()->back();
    }
}
