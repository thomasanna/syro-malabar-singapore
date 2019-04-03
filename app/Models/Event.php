<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $table = 'events';
   protected $primaryKey = 'eventId';
   public $fillable = ['eventName', 'eventDate','eventTime','location','eventDescription','eventImage','status'];
}
