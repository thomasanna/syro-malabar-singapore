<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class houseBlessingRequest extends Model
{
   protected $table = 'house_blessing_request';
   protected $primaryKey = 'houseBlessingRequestId';
   public $fillable = ['name', 'contact_number','house_blessing_date','house_blessing_time','address','status'];
}
