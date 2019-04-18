<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Prayer;
use Auth;
use Illuminate\Support\Facades\Validator;




class PrayerController 
{

 public function list(){
        return view('admin.prayer.index');
  }

  public function data(){
        return Datatables::of(Prayer::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($liturgical){
            $html = "<a action=".route('admin.liturgical-calender.delete',$liturgical->liturgicalCalenderId)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
  }
}