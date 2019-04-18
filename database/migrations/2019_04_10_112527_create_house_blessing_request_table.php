<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseBlessingRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_blessing_request', function (Blueprint $table) {
            $table->increments('houseBlessingRequestId');
            $table->string('name');
            $table->string('contact_number');
            $table->date('house_blessing_date');
            $table->time('house_blessing_time');
            $table->text('address');
            $table->boolean('status')->default(0)->comment('1:Active,0:Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_blessing_request');
    }
}
