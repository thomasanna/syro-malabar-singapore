<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;
use Auth;
use Log;
class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(Auth::guard('admin')->check()){
       $auth = Auth::guard('admin')->user();
       $admin = Admin::find($auth->adminId);
        if($auth->isLoggedIn==0 || session()->get('sessionId') != $admin->sessionId){
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login')->with('message','Multiple logins denied !!');
        }
        return $next($request);
      }else{
        Auth::guard('admin')->logout();
        Admin::where('status',1)->update(['isLoggedIn'=>0]);
        return redirect()->route('admin.login')->with('message','Session Expired, Please try to login again');
      }
    }
}
