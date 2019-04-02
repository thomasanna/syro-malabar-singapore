<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
   protected $table = 'content';
   protected $primaryKey = 'contentId';
   public $fillable = ['contentType', 'content'];

   public function getContent($type){
   	   $content  = $this::where('contentType',$type)->first(); 
   	   return $content;
   }
}
