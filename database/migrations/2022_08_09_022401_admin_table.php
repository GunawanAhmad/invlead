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
    Schema::create('admin', function (Blueprint $table)
    {
        $table->id();
        $table->string('nama_admin')->unique();
        $table->timestamp('email_admin')->nullable();
        $table->string('password_admin');
        $table->string('username_admin');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
