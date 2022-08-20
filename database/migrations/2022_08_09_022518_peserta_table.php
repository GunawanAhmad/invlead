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
        Schema::create('pesertas', function (Blueprint $table)
        {
            $table->id();
            $table->string('nama_peserta');
            $table->string('asal_sekolah');
            $table->string('alamat_rumah');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->integer('jumlah_poin_kinerja')->nullable();
            $table->integer('jumlah_poin_kedisiplinan')->nullable();
            $table->integer('nilai_kinerja_task1')->nullable();
            $table->integer('nilai_kinerja_task2')->nullable();
            $table->integer('nilai_kinerja_task3')->nullable();
            $table->integer('nilai_kedisiplinan_disiplin')->nullable();
            $table->integer('nilai_kedisiplinan_sopan')->nullable();
            $table->integer('nilai_kedisiplinan_santun')->nullable();
            $table->integer('total_nilai')->nullable()->default(0);
            $table->boolean('is_nilai_kinerja_finish')->default(false);
            $table->boolean('is_nilai_kedisiplinan_finish')->default(false);
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
        Schema::dropIfExists('peserta_magang');
    }
};