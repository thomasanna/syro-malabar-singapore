<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Session;
use Hash;
use Log;

class LoginController
{
    public function login(){
	    if(Auth::guard('admin')->check()){
	      return redirect()->route('admin.dashboard');
	    }
	    return view('admin.startup.login');
   }  
  
    public function checkLogin(Request $req){
	    if(Auth::guard('admin')->check()){
	      return redirect()->route('admin.dashboard');
	    }
	    if (Auth::guard('admin')->attempt($req->only(['username','password']))) {
	        $admin = Admin::find(Auth::guard('admin')->user()->adminId);
	        $newSessid   = Session::getId();
	        session()->put('sessionId',$newSessid);
	        if($admin->isLoggedIn==0){
	          // $position = Location::get();
	          // Log::info(response()->json($position));
	          // if($position != false){
	          //   AdminLogin::create([
	          //     'adminId'=>$admin->adminId,
	          //     'country'=>$position->countryName,
	          //     'latitude'=>$position->latitude,
	          //     'longitude'=>$position->longitude,
	          //     'ip'=>$req->ip(),
	          //   ]);
	          // }
	          
	          $admin->update(['isLoggedIn'=>1,'sessionId'=>$newSessid]);
	          return redirect()->route('admin.dashboard');
	        }else{
	          //Auth::guard('admin')->logout();
	          //$lastLogin = AdminLogin::where('adminId',1)->orderBy('adminLoginId','DESC')->first();
	          //return redirect()->route('admin.login');
	          $admin->update(['isLoggedIn'=>1,'sessionId'=>$newSessid]);
	          return redirect()->route('admin.dashboard');
	        }
	    }else{
	      return redirect()->route('admin.login')->with('error', 'Invalid Login, Please try to login again');
	    }
  }

  public function logout(){
  	$admin = Admin::find(Auth::guard('admin')->user()->adminId);
    $admin->update(['isLoggedIn'=>0,'sessionId'=>null]);
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login')->with('message','Successfully Logged Out!!');
  }
}
