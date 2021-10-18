<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\EventModel;

class EventController extends Controller
{
    public function showEvent(){
        $data['event_list']     = EventModel::all();

        return view('admin.event', $data);
    }

    public function addEvent(){
        $data["months"]         = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        return view('admin.addevent', $data);
    }

    public function postaddEvent(Request $request){
        $event                  = new EventModel;

        if ($request->hasFile('event_thumb')) {
            $file                   = $request->file('event_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $event->event_thumb     = $image_save_name;
            $file->move('public/upload/event/', $image_save_name);
        }

        $event->event_ten       = $request->event_ten;
        $event->event_ten_en    = $request->event_ten_en;

        $event->event_des       = $request->event_des;
        $event->event_des_en    = $request->event_des_en;

        $event->event_end_day   = $request->event_end_day;
        $event->event_end_month = $request->event_end_month;
        $event->event_end_year  = $request->event_end_year;
        $event->event_end_time  = $request->event_end_time;

        $event->event_author    = $request->event_author;
        $event->event_editor    = $request->event_author;
        $event->event_show      = true; 

        $event->created_at       = Carbon::now();
        $event->updated_at       = Carbon::now();
        $event->save();

        return redirect()->intended('admin/event');
    }



    public function editEvent($id){
        $data["months"]         = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        $data['event_item']     = EventModel::find($id);

        return view('admin.editevent', $data);
    }

    public function posteditEvent(Request $request, $id){
        $event                  = EventModel::find($id);

        if ($request->hasFile('event_thumb')) {
            File::delete('public/upload/event/'.$event->event_thumb);

            $file                   = $request->file('event_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $event->event_thumb     = $image_save_name;
            $file->move('public/upload/event/', $image_save_name);
        }

        $event->event_ten       = $request->event_ten;
        $event->event_ten_en    = $request->event_ten_en;

        $event->event_des       = $request->event_des;
        $event->event_des_en    = $request->event_des_en;

        $event->event_end_day   = $request->event_end_day;
        $event->event_end_month = $request->event_end_month;
        $event->event_end_year  = $request->event_end_year;
        $event->event_end_time  = $request->event_end_time;

        $event->event_editor    = $request->event_editor;

        $event->created_at       = Carbon::now();
        $event->updated_at       = Carbon::now();
        $event->save();

        return redirect()->intended('admin/event');
    }


    public function deleteEvent(Request $request, $id){
        $event                   = EventModel::find($id);
        File::delete('public/upload/event/'.$event->event_thumb);
        EventModel::destroy($id);

        return back();
    }


    public function checkEvent($id){
        $event                  = EventModel::find($id);
        $event->event_show      = $event->event_show ? 0 : 1;
        $event->save();
        
        return back();
    }

}
