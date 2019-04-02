<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Catechism;
use Auth;
use Illuminate\Support\Facades\Validator;




class CatechismController 
{
  public function list(){
        return view('admin.catechism.index');
  }

  public function data(Request $req){
    return Datatables::of(Catechism::select('*'))
          ->addIndexColumn()
           ->editColumn('actions',function($catechism){
            $html = "<a action=".route('admin.catechism.delete',$catechism->catechism_id)." class='btn btn-danger btn-xs mrs delete' style='margin: 0 5px;'";
            $html .= "token=".csrf_token()."><i class='fa fa-trash' aria-hidden='true'></i> Delete</a>";
           
            return $html;
        })
           ->rawColumns(['actions'])

           ->make(true);
  }

  public function delete($id){
      $data = Catechism::find($id);
      $data->delete();
      return 1;
  }

public function create(){
   return view('admin.catechism.create');
}

public function save(Request $request){
   
    $input     = $request->all();

    $validator = Validator::make($input, [
            'class'  => 'required',
            'book' => 'required|mimes:rar,zip',

    ]);

    try{
        $data = Catechism::where('class',$input['class'])
                           ->where('lesson',$input["lesson"])->get();
        $book      = $request->file('book');
        $bookName  = $input['class'].'_'.str_random(8).'.'.$book->getClientOriginalExtension();
        $path      = $request->file('book')->storeAs('uploads/catechism/'.$input['class'].'/'.$input["lesson"], $bookName);

        if(count($data)>0){
           $data->description = $input["description"];
           $data->book = $bookName;
           $data->save();
        }
        else{
          $cat    =   Catechism::create([
              'class'       => $input["class"],
              'lesson'      => $input["lesson"],
              'description' => $input["description"],
              'book'    => $bookName
          ]);
        }

        return back()

            ->with('success','You have been successfully uploaded.');

    }

    catch(Exeption $e){
           return redirect(route('admin.catechism.create'))->withErrors($e->getMessage())->withInput();
    }   
  }
}