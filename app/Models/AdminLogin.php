<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
  protected $table = 'admin_logins';
  protected $primaryKey = 'adminLoginId';
  public $fillable = ['adminId', 'country' , 'region','city','latitude','longitude','ip'];
}
