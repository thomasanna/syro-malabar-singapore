<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusNocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noc', function ($table) {
                 $table->boolean('status')->comment('1:Approved,0:Not')->default(0)->after('reference_person_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('noc', function (Blueprint $table) {
           $table->dropColumn('status');
      });
    }
}
