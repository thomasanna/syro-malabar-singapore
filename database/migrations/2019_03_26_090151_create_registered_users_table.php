<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_users', function (Blueprint $table) {
            $table->increments('reg_user_id');
            $table->string('name');
            $table->string('contact_number');
            $table->string('nric_fin')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('address_in_singapore')->nullable();
            $table->string('address_in_india')->nullable();
            $table->string('parish_in_india')->nullable();
            $table->string('diocese_in_india')->nullable();
            $table->boolean('family_living_in_india')->comment('1:Yes,0:No')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered_users');
    }
}
