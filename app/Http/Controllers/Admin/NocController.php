<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\noc;
use Auth;
use Twilio;


class NocController 
{

    public function list(){
        return view('admin.noc');
    }

    public function data(Request $req){
        return Datatables::of(noc::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($noc){
            $html = "<a action=".route('admin.noc.delete',$noc->nocId)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
            if($noc->status == 0){
               $html .= "<a action=".route('admin.noc.approve',$noc->nocId)." class='btn btn-success btn-xs mrs approve' style='margin: 0 5px;'";
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
       $data = noc::find($id);
       $data->delete();
       return 1;
  }

  public function approve($id){
       $data = noc::find($id);
       $data->status = 1;
       $data->save();
       $sms_to = '+65'.$data->contact_number;
       $msg  =  'Your request for marriage NOC has approved' ;
       $sms = Twilio::message($sms_to, $msg);
       return 1;
  }

}