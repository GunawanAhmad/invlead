<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_payment_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('price');
            $table->foreignId('merchant_product_id');
            $table->timestamps();

            $table->foreign('merchant_product_id')->references('id')->on('merchant_products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchant_payment_invoices');
    }
};
