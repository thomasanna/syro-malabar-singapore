<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredUsers extends Model
{
   protected $table = 'registered_users';
   protected $primaryKey = 'reg_user_id';
   public $fillable = ['name', 'contact_number','nric_fin','email','age','sex','marital_status','address_in_singapore','address_in_india','parish_in_india','diocese_in_india','family_living_in_india'];
   
}
