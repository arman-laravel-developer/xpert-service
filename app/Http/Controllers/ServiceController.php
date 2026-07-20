<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function getImageUrl($request)
    {
        $slug = Str::slug($request->title);
        $image = $request->file('image');
        $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
        $directory = 'service-images/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('admin.service.index', compact('services'));
    }

    public function edit($id)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $editItem = Service::find($id);
        return view('admin.service.index', compact('services', 'editItem'));
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->benefits = $request->benefits;
        $service->process = $request->process;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        if ($request->file('image')) {
            $service->image = $this->getImageUrl($request);
        }
        if ($request->status) { $service->status = $request->status; } else { $service->status = 0; }
        $service->save();
        Alert::success('Service Added Successfully');
        return redirect()->route('service.index');
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->benefits = $request->benefits;
        $service->process = $request->process;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        if ($request->file('image')) {
            if (file_exists($service->image)) { unlink($service->image); }
            $service->image = $this->getImageUrl($request);
        }
        if ($request->status) { $service->status = $request->status; } else { $service->status = 0; }
        $service->save();
        Alert::success('Service Updated Successfully');
        return redirect()->route('service.index');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if (file_exists($service->image)) { unlink($service->image); }
        $service->delete();
        Alert::success('Service Deleted Successfully');
        return redirect()->back();
    }
}
