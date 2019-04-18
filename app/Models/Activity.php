<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
   protected $table = 'activities';
   protected $primaryKey = 'actvityId';
   public $fillable = ['year', 'content'];
}
