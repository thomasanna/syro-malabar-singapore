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
           ->editColumn('actions',function($event){
            $html = "<a action=".route('admin.catechism.delete',$event->eventId)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
	}

	public function create(){
		return view('admin.events.create');
	}


}