<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catechism extends Model
{
   protected $table = 'catechism';
   protected $primaryKey = 'catechism_id';
   public $fillable = ['class', 'lesson' ,'description' ,'book'];
}
