<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('balance');
            $table->foreignId('owner_id');

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });        

        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->foreignId('owner_id');

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('merchant_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('merchant_id');
            $table->string('name');
            $table->integer('price');
            $table->string('type');

            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('target_account_id');
            $table->foreignId('source_account_id');
            $table->integer('amount');
            $table->foreignId('merchant_product_id')->nullable();

            $table->foreign('target_account_id')->references('id')->on('bank_accounts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('source_account_id')->references('id')->on('bank_accounts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('merchant_product_id')->references('id')->on('merchants')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('merchant_products');
        Schema::dropIfExists('merchants');
        Schema::dropIfExists('bank_accounts');
    }
};
