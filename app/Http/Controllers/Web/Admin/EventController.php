<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class EventController extends Controller {
    public function index() {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event;
        $event->name = $request->input('name');
        $event->organizer = $request->input('organizer');
        $event->description = $request->input('description');
        $event->date_time = $request->input();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/images/events/', $filename);
            $event->img_path = 'storage/images/events/'. $filename;
        }
        $event->save();
        return redirect()->back()->with('status','New Event Added Successfully!');
    }

    public function edit($id) {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id) {
        $event = Event::find($id);
        $event->name = $request->input('name');

        if($request->hasfile('image')) {
            if(File::exists($event->img_path)) {
                File::delete($event->img_path);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/images/events/', $filename);
            $event->img_path = 'storage/images/events/'. $filename;
        }

        $event->update();
        return redirect()->back()->with('status','Event Updated Successfully!');
    }

    public function destroy($id) {
        $event = Event::find($id);
        $image = $event->img_path;
        if(File::exists($image)) {
            File::delete($image);
        }
        $event->delete();
        return redirect()->back()->with('status','Event Deleted Successfully!');
    }
}
