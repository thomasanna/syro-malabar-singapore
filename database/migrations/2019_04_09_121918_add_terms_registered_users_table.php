<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTermsRegisteredUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registered_users', function ($table) {
                 $table->boolean('terms')->comment('1:Yes,0:No')->default(0)->after('family_living_in_india');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registered_users', function (Blueprint $table) {
           $table->dropColumn('terms');
      });
    }
}
