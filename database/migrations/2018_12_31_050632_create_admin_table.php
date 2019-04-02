<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('adminId');
            $table->string('name',100);
            $table->string('username',100)->unique();
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->rememberToken();
            $table->boolean('status')->default(1)->comment('1:Active,0:Inactive');
            $table->boolean('isLoggedIn')->comment("1:Online,0:Offline");
            $table->timestamp('lastLogin')->nullable();
            $table->string('sessionId')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
