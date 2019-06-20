<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Content;
use App\Models\Activity;
use App\Models\Novena;
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

	public function activities(){
		return view('admin.activities');
	}
	public function saveActivity(Request $request){
		$input     = $request->all();
	    $content = Activity::where('year',$input['year'])->first();
	    if($content){

           $content->content = $input['content'];
           $content->save();
           return redirect()->route('admin.activities')->with('success', 'The activity has been successfully updated');
	    }
	    else{
	    	Activity::create([
             'year'   => $input['year'],
             'content'   => $input['content'],
            ]);
            return redirect()->route('admin.activities')->with('success', 'The activity has been successfully updated');
	    }
	}

	public function getActivityByYear(Request $request){
		$input        = $request->all();
		$year  = $input['year'];
		if($year != ''){
          $content = Activity::where('year',$year)->first();
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

	public function novena(){

		return view('admin.novena');		
	}
	public function novenaSave(Request $request){
     
		$input     = $request->all();
		try{
	    $content = Novena::where('saint_name',$input['saint_name'])
	        ->where('lang',$input['lang'])
	        ->where('prayer_type',$input['prayer_type'])
		    ->first();
	    if($content){

            if ($request->hasFile('novena_file')) {
              if($content->file != ""){
              	if(is_file(storage_path('app/uploads/novena/'.$content->file))){
              	 unlink(storage_path('app/uploads/novena/'.$content->file));
              	}
              	}
              $file            = $request->file('novena_file');
              $fileName        = str_random(8).'.'.$file->getClientOriginalExtension();
              $file_path       = $request->file('novena_file')->storeAs('uploads/novena/',$fileName);
              $content->file   = $fileName;
              }
            
              
            

            $content->saint_name = $input['saint_name'];
            $content->prayer_type = $input['prayer_type'];
            $content->lang = $input['lang'];
            $content->content = $input['content'];
            $content->save();
            return redirect()->route('admin.novena')->with('success', 'The novena has been successfully updated');
	    }
	    else{
	    	
            $fileName  = '';
            if ($request->hasFile('novena_file')) {
              $file      = $request->file('novena_file');
              $fileName        = str_random(8).'.'.$file->getClientOriginalExtension();
              $file_path       = $request->file('novena_file')->storeAs('uploads/novena/',$fileName);
          }
          Novena::create([
             'saint_name'   => $input['saint_name'],
             'prayer_type'   => $input['prayer_type'],
             'lang'   => $input['lang'],
             'content'   => $input['content'],
             'file'   => $fileName,
            ]);
            return redirect()->route('admin.novena')->with('success', 'The novena has been successfully updated');
        }
	    }
	    catch(Exeption $e){
            return redirect(route('admin.novena'))->withErrors($e->getMessage())->withInput();
        } 	
	}

	public function getNovena(Request $request){
		$input        = $request->all();
		$saint_name  = $input['saint_name'];
		$prayer_type  = $input['prayer_type'];
		$lang  = $input['lang'];
		
          $novena = Novena::where('saint_name',$saint_name)
          ->where('prayer_type',$prayer_type)
          ->where('lang',$lang)
          ->first();
          if(!empty($novena)){
          	return ['status'=>200,'message'=>'success','content'=>$novena->content];
          }
          else{
          	return ['status'=>200,'message'=>'success','content'=>''];
          }          
		
		
	}


}