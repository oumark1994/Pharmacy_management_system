<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHellosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hellos', function (Blueprint $table) {
            $table->id();
            $table->string('medecine_name');
            $table->integer('qty');
            $table->integer('amount');
            $table->integer('price');
            $table->string('patient_name');
            $table->string('patient_no');
            $table->integer('status');
            $table->integer('medecine_id');
            $table->string('date');
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
        Schema::dropIfExists('hellos');
    }
}
