<?php

namespace App\Http\Controllers;

use App\Models\ServiceArea;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceAreaController extends Controller
{
    public function index()
    {
        $areas = ServiceArea::orderBy('id', 'desc')->get();
        return view('admin.service-area.index', compact('areas'));
    }

    public function edit($id)
    {
        $areas = ServiceArea::orderBy('id', 'desc')->get();
        $editItem = ServiceArea::find($id);
        return view('admin.service-area.index', compact('areas', 'editItem'));
    }

    public function store(Request $request)
    {
        $area = new ServiceArea();
        $area->name = $request->name;
        $area->slug = Str::slug($request->name);
        if ($request->status) { $area->status = $request->status; } else { $area->status = 0; }
        $area->save();
        Alert::success('Service Area Added Successfully');
        return redirect()->route('service-area.index');
    }

    public function update(Request $request, $id)
    {
        $area = ServiceArea::find($id);
        $area->name = $request->name;
        $area->slug = Str::slug($request->name);
        if ($request->status) { $area->status = $request->status; } else { $area->status = 0; }
        $area->save();
        Alert::success('Service Area Updated Successfully');
        return redirect()->route('service-area.index');
    }

    public function destroy($id)
    {
        ServiceArea::find($id)->delete();
        Alert::success('Service Area Deleted Successfully');
        return redirect()->back();
    }
}
