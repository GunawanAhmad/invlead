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
        Schema::create('peserta_magang', function (Blueprint $table)
        {
            $table->id();
            $table->foreignId('id_admin');
            $table->foreign('id_admin')->references('id')->on('admin');
            $table->string('nama_peserta')->unique();
            $table->string('asal_sekolah');
            $table->string('alamat_rumah');
            $table->integer('umur');
            $table->string('motohidup');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_magang');
    }
};
