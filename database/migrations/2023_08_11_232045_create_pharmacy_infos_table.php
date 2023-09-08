<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->integer('phone');
            $table->string('opening_date');
            $table->string('closing_date');
            $table->string('opening_balance');
            $table->string('closing_balance');
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
        Schema::dropIfExists('pharmacy_infos');
    }
}
