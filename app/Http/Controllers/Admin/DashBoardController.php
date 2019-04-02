<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Content;
use Auth;



class DashBoardController extends Controller
{
	public function dashboard(){
      return view('admin.dashboard');
	}
	public function content(){
	    $content = Content::get();
	    //echo "<pre>";print_r($content); exit;
		return view('admin.content',compact('content'));		
	}
	public function menu(){

		return view('admin.menu');		
	}

	public function contentSave(Request $request){
        
	    $input     = $request->all();
	    $content = Content::where('contentType',$input['contentType'])->first();
	    if($content){

           $content->content = $input['content'];
           $content->save();
           return redirect()->route('admin.content')->with('success', 'The content has been successfully updated');
	    }
	    else{
	    	Content::create([
             'contentType'   => $input['contentType'],
             'content'   => $input['content'],
            ]);
            return redirect()->route('admin.content')->with('success', 'The content has been successfully updated');
	    }    
	}

	public function getContentByType(Request $request){
		$input        = $request->all();
		$contentType  = $input['contentType'];
		if($contentType != ''){
          $content = Content::where('contentType',$contentType)->first();
          if(!empty($content)){
          	return ['status'=>200,'message'=>'success','content'=>$content->content];
          }
          else{
          	return ['status'=>200,'message'=>'success','content'=>''];
          }          
		}
		else{
			return ['status'=>200,'message'=>'success','content'=>''];
		}
	}

	public function event(){
		return view('admin.events.index');
	}

	// public function eventdata(Request $req){
 //      return Datatables::of(Event::select('*')->orderBy('eventDateTime','DESC'))
 //      ->addIndexColumn()
 //      ->editColumn('status',function($event){
 //        if(strtotime(date('d-m-Y H:i:s')) >=  strtotime(date("d-m-Y H:i:s", strtotime($event->eventDateTime)))){ return "<span class='label label-danger'>Inactive</span>";}
 //        else{ return "<span class='label label-success'>Active</span>";}
 //      })
 //      ->editColumn('eventDateTime',function($event){
 //          $originalDate = $event->eventDateTime;
 //          return $newDate      = date("d-m-Y H:i:s", strtotime($originalDate));
 //      })
 //      ->editColumn('actions',function($event){
 //        $html  = "<a href=".route('admin.events.show',$event->eventId)." class='btn btn-success btn-xs mrs' style='margin: 0 5px;'><i class='fa fa-eye' aria-hidden='true'></i> Show</a>";
 //        if(Auth::guard('admin')->user()->username=="theknowshowadmin"){
 //          if(date('d-m-Y') !=  date("d-m-Y", strtotime($event->eventId))){
 //              $html .= "<a action='#' class='btn btn-primary btn-xs mrs' style='margin: 0 5px;' disabled><i class='fa fa-forward' aria-hidden='true'></i> Go Live</a>";
 //          }
 //          else{
 //              $html .= "<a href=".route('admin.events.start',$event->eventId)." class='btn btn-primary btn-xs mrs' style='margin: 0 5px;''><i class='fa fa-forward' aria-hidden='true'></i> Go Live</a>";
 //          }
 //        }
        
 //        $html .= "<a href=".route('admin.events.questions.list',$event->eventId)." class='btn btn-primary btn-xs mrs' style='margin: 0 5px;'><i class='fa fa-question' aria-hidden='true'></i> Questions</a>";
 //        if($event->isCompleted ==1){
 //          $html .= "<a href=".route('admin.events.results',$event->eventId)."  class='btn btn-primary btn-xs mrs'";
 //          $html .= "><i class='fa fa-check-circle' aria-hidden='true'></i> Results</a>";
          
 //          $html .= "<a href=".route('admin.events.payment',$event->eventId)."  class='btn btn-primary btn-xs mrs'";
 //          $html .= "><i class='fa fa-check-circle' aria-hidden='true'></i> Payment</a>";
 //        }else{
 //          $html .= "<a disabled='disabled' href='javascript:void(0)' class='btn btn-info btn-xs mrs'";
 //          $html .= "><i class='fa fa-check-circle' aria-hidden='true'></i> Results</a>";
 //        }
 //        if(strtotime(date('d-m-Y H:i:s')) >=  strtotime(date("d-m-Y H:i:s", strtotime($event->start_time)))){
 //          $html .= " <a action='#' class='btn btn-danger btn-xs mrs delete-disabled' disabled>";
 //          $html .= "<i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
 //        }
 //        else{
 //          $html .= " <a action=".route('admin.events.delete',$event->eventId)." class='btn btn-danger btn-xs mrs delete'";
 //          $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
 //        }
 //        return $html;
 //    })->make(true);
 //  }

}