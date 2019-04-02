<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\RegisteredUsers;
use App\Models\FamilyDetails;
use Auth;




class UserController 
{

  public function list(){
        return view('admin.users.index');
  }

  public function data(Request $req){
    return Datatables::of(RegisteredUsers::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($user){
            $html = "<a href=".route('admin.user.view',$user->reg_user_id)." class='btn btn-success btn-xs mrs' style='margin: 0 5px;'><i class='fa fa-eye'></i> Show</a>";
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
  }

  public function view($id){

      $user = RegisteredUsers::find($id);
      $familyDetails = FamilyDetails::where('parent_user_id',$id)->get();
      //echo "<pre>";print_r($content); exit;

      return view('admin.users.view',compact('user','familyDetails'));
  }

}