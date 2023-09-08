<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_stores', function (Blueprint $table) {
            $table->id();
            $table->string('medecine_name');
            $table->string('capacity');
            $table->string('date_received');
            $table->integer('price');
            $table->string('qty');
            $table->string('stock_out');
            $table->string('expiry_date');
            $table->string('type');
            $table->integer('amount'); 
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
        Schema::dropIfExists('pharmacy_stores');
    }
}
