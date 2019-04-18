<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prayer extends Model
{
   protected $table = 'prayer';
   protected $primaryKey = 'title';
   public $fillable = ['saint_name', 'file'];
}
