<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Feedback;
use Auth;




class FeedbackController 
{

  public function list(){
        return view('admin.feedback');
  }

  public function data(Request $req){
    return Datatables::of(Feedback::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($feedback){
            $html = "<a action=".route('admin.feedback.delete',$feedback->feedback_id)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
  }

  public function delete($id){
       $data = Feedback::find($id);
       $data->delete();
       return 1;
  }



}