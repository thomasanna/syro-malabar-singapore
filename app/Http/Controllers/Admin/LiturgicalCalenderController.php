<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\LiturgicalCalender;
use Auth;
use Illuminate\Support\Facades\Validator;




class LiturgicalCalenderController 
{
   public function list(){
        return view('admin.liturgical.index');
  }

  public function data(){
        return Datatables::of(LiturgicalCalender::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($liturgical){
            $html = "<a action=".route('admin.liturgical-calender.delete',$liturgical->liturgicalCalenderId)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
  }

  public function create(){

   return view('admin.liturgical.create');

  }

  public function save(Request $request){
  	$input     = $request->all();

    $validator = Validator::make($input, [
            'calender' => 'required|mimes:rar,zip,pdf',
    ]);
    try{
        $data = LiturgicalCalender::where('year',$input['year'])
                           ->where('lang',$input["lang"])->get();
        $calender   = $request->file('calender');
        $calenderName  = $input['lang'].'_'.$input['year'].'_'.str_random(8).'.'.$calender->getClientOriginalExtension();
        $path      = $request->file('calender')->storeAs('uploads/calender/', $calenderName);

        if(count($data)>0){
           $data->year = $input["year"];
           $data->lang = $input["lang"];
           $data->file = $calenderName;
           $data->save();
        }
        else{
          $cat    =   LiturgicalCalender::create([
              'year'       => $input["year"],
              'lang'      => $input["lang"],
              'file'    => $calenderName
          ]);
        }

        return back()

            ->with('success','You have been successfully uploaded.');

    }
    catch(Exeption $e){
           return redirect(route('admin.liturgical-calender.create'))->withErrors($e->getMessage())->withInput();
    }  
  }

   public function delete($id){
      $data = LiturgicalCalender::find($id);
      unlink(storage_path('app/uploads/calender/'.$data->file));
      $data->delete();
      return 1;
  }

}