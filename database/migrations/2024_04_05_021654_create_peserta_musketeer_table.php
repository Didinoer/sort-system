<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaMusketeerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_musketeer', function (Blueprint $table) {
            $table->id();
            $table->string('id_peserta', 100)->nullable()->default('text');
            $table->string('name', 100)->nullable()->default('text');
            $table->string('jenis_kelamin')->default('text');
            $table->tinyInteger('umur')->nullable();
            $table->string('nama_ayah' ,100)->nullable();
            $table->string('ukuran_kaos', 10)->nullable();
            $table->string('nama_ibu' ,100)->nullable();
            $table->string('kode_group' ,100)->nullable();
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
        Schema::dropIfExists('peserta_musketeer');
    }
}
