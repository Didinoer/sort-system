<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnPesertaMusketeer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peserta_musketeer', function (Blueprint $table) {
            $table->unsignedBigInteger('id_group')->nullable();
            $table->foreign('id_group')->references('id')->on('group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peserta_musketeer', function (Blueprint $table) {
            $table->dropForeign(['id_group']);
            $table->dropColumn('id_group');
        });
    }
}
