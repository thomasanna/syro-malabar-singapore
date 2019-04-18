<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novena extends Model
{
   protected $table = 'novena';
   protected $primaryKey = 'novenaId';
   public $fillable = ['saint_name', 'prayer_type','lang','content','file'];
}
