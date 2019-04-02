<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Event;
use Auth;
use Illuminate\Support\Facades\Validator;


class EventController 
{

    public function list(){
		return view('admin.events.index');
	}
	public function data(){
		return Datatables::of(Event::select('*'))
          ->addIndexColumn()
          ->editColumn('status',function($event){
            $eventAt = $event->eventDate." ".$event->eventTime;
            if(strtotime(date('d-m-Y H:i:s')) >=  strtotime(date("d-m-Y H:i:s", strtotime($eventAt)))){ 
              return "<span class='label label-danger'>Inactive</span>";}
            else { return "<span class='label label-success'>Active</span>";}
          })

           ->editColumn('eventDate',function($event){
            $originalDate = $event->eventDate;
            return $newDate      = date("d-m-Y", strtotime($originalDate));
           })
            ->editColumn('eventImage',function($event){
                  if (file_exists(storage_path('app/uploads/events/'.$event->eventImage)) && $event->eventImage){
                      return "<img src=".asset('storage/app/uploads/events/'.$event->eventImage)." width= '80px' height= '60px'>";
                  }
                  return "";
              })
           ->editColumn('actions',function($event){
            $html = "<a action=".route('admin.event.delete',$event->eventId)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
           
            return $html;
        })
           ->rawColumns(['actions','status','eventImage'])
           


           ->make(true);
	}

	public function create(){
		return view('admin.events.create');
	}

  public function save(Request $request){
    $input     = $request->all();

    $validator = Validator::make($input, [
            'eventImage' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',

    ]);
    if ($validator->fails()) {
             return redirect(route('admin.event.create'))->withErrors($validator)->withInput();
    }

    try{

        $eventImage      = $request->file('eventImage');
        $imageName   =     str_random(8).'.'.$eventImage->getClientOriginalExtension();
        $path        = $request->file('eventImage')->storeAs('uploads/events/', $imageName);
        $originalDate = $input["eventDate"];
        $newDate      = date("Y-m-d", strtotime($originalDate));
         $cat    =   Event::create([
              'eventName'       => $input["eventName"],
              'eventDate'      => $newDate,
              'eventTime' => $input["eventTime"],
              'eventDescription'    => $input["description"],
              'status'    => 1,
              'eventImage'    => $imageName
          ]);
         return back()

            ->with('success','Your event has been successfully added.');
    }catch(Exeption $e){
           return redirect(route('admin.event.create'))->withErrors($e->getMessage())->withInput();
    } 
  }

  public function delete($id){
    $data = Event::find($id);
    $data->delete();
    return 1;
  }


}