<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noc', function (Blueprint $table) {
            $table->increments('nocId');
            $table->string('name');
            $table->string('baptism_name');
            $table->string('contact_number');
            $table->string('nric_fin')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('address_in_singapore')->nullable();
            $table->string('work_place_address')->nullable();
            $table->string('designation')->nullable();
            $table->date('date_arrival_singapore')->nullable();
            $table->string('church_in_singapore')->nullable();
            $table->string('address_in_india')->nullable();
            $table->string('parish_vicar_name')->nullable();
            $table->string('parish_address')->nullable();
            $table->string('would_be_details')->nullable();
            $table->string('reference_person_1')->nullable();
            $table->string('reference_person_2')->nullable();
            $table->string('reference_person_3')->nullable();
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
        Schema::dropIfExists('noc');
    }
}
