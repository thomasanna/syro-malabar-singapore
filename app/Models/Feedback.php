<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
   protected $table = 'feedback';
   protected $primaryKey = 'feedback_id';
   public $fillable = ['name', 'contact_number','subject','message','approve'];
}
