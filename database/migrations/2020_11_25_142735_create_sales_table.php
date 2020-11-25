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
            $table->unsignedBigInteger('product_code');
              // $table->foreign('product')
              //     ->references('product_code')->on('inventories');
            $table->unsignedBigInteger('invoice_no');
            // $table->foreign('invoice')
            //       ->references('invoice_no')->on('inventories');
            $table->unsignedBigInteger('customer');
            // $table->foreign('customer')
            //       ->references('secrial_number')->on('customers');
            $table->string('product_description');
            $table->string('quantity');
            $table->string('rate');
            $table->string('amount');
            $table->string('payment');
            // $table->unsignedBigInteger('sale');
            // $table->primary('sale');
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
