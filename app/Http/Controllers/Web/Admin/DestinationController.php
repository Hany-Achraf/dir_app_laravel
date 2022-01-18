<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DestinationController extends Controller {
    public function index() {
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

    public function create() {
        return view('destinations.create');
    }

    public function store(Request $request) {
        $destination = new Destination;
        $destination->name = $request->input('name');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/images/destinations/', $filename);
            $destination->img_path = 'storage/images/destinations/'. $filename;
        }
        $destination->save();
        return redirect()->back()->with('status','New Destination Added Successfully!');
    }

    public function edit($id) {
        $destination = Destination::find($id);
        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id) {
        $destination = Destination::find($id);
        $destination->name = $request->input('name');

        if($request->hasfile('image')) {
            if(File::exists($destination->img_path)) {
                File::delete($destination->img_path);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/images/destinations/', $filename);
            $destination->img_path = 'storage/images/destinations/'. $filename;
        }

        $destination->update();
        return redirect()->back()->with('status','Destination Updated Successfully!');
    }

    public function destroy($id) {
        $destination = Destination::find($id);
        $image = $destination->img_path;
        if(File::exists($image)) {
            File::delete($image);
        }
        $destination->delete();
        return redirect()->back()->with('status','Destination Deleted Successfully!');
    }
}
