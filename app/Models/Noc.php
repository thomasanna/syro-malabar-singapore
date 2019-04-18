<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noc extends Model
{
   protected $table = 'noc';
   protected $primaryKey = 'nocId';
   public $fillable = ['name', 'baptism_name','contact_number','nric_fin','sex','marital_status','father_name','mother_name','address_in_singapore','work_place_address','designation','date_arrival_singapore','church_in_singapore','address_in_india','parish_vicar_name','parish_address','would_be_details','reference_person_1','reference_person_2','reference_person_3','status'];
}
