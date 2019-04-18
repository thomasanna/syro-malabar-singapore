<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\houseBlessingRequest;
use Auth;
use Twilio;


class HouseBlessingRequestController 
{
  public function list(){
        return view('admin.house-blessing-request');
  }
  public function data(Request $req){
        return Datatables::of(houseBlessingRequest::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($req){
            $html = "<a action=".route('admin.house-blessing-req.delete',$req->houseBlessingRequestId)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
            if($req->status == 0){
               $html .= "<a action=".route('admin.house-blessing-req.approve',$req->houseBlessingRequestId)." class='btn btn-success btn-xs mrs approve' style='margin: 0 5px;'";
               $html .= "token=".csrf_token()."><i class='fa fa-thumbs-up' aria-hidden='true'></i> Approve</a>";
            }
            else{
               $html .= "<a action='#' class='btn btn-success btn-xs mrs' style='margin: 0 5px;'>";
               $html .= "<i class='fa fa-thumbs-up' aria-hidden='true'></i> Approved</a>";
            }
            
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
  }

  public function delete($id){
       $data = houseBlessingRequest::find($id);
       $data->delete();
       return 1;
  }
  public function approve($id){
       $data = houseBlessingRequest::find($id);
       $data->status = 1;
       $data->save();
       $sms_to = '+65'.$data->contact_number;
       $msg  =  'Your request for house blessing on '.$data->house_blessing_date.' at '.$data->house_blessing_time.' has approved' ;
       $sms = Twilio::message($sms_to, $msg);
       return 1;
  }
}

