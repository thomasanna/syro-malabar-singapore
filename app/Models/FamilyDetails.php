<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyDetails extends Model
{
   protected $table = 'family_details';
   protected $primaryKey = 'family_member_id';
   public $fillable = ['parent_user_id', 'member_name','relation','sex','age'];
}
