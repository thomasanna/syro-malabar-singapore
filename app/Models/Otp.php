<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
   protected $table = 'otp';
   protected $primaryKey = 'otpId';
   public $fillable = ['contact_number', 'otp'];
}
