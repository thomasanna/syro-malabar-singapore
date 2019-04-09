<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LiturgicalCalender extends Model
{
   protected $table = 'liturgical_calender';
   protected $primaryKey = 'liturgicalCalenderId';
   public $fillable = ['year', 'lang','file'];
}
