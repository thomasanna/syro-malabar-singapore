<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::create([
        'name'  =>'Teenu',
        'email'  =>'teenuthomas12@gmail.com',
        'username'  =>'admin',
        'password'  =>Hash::make('admin123'),
        'isLoggedIn'  =>0,
      ]);
    }
}
