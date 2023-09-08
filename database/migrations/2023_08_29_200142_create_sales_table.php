<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->string('patient_type');
            $table->string('sales_date');
            $table->string('payment_mode');
            $table->string('mpesa_code');
            $table->string('mpesa_payment');
            $table->string('customer');
            $table->string('medecine_name');
            $table->integer('price');
            $table->integer('qty');
            $table->integer('payment');
            $table->integer('balance');
            $table->integer('total');
            $table->string('time');
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
        Schema::dropIfExists('sales');
    }
}
