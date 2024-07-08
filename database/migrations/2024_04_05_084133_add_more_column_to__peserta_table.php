<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnToPesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peserta', function (Blueprint $table) {
            $table->string('nomor_telephone', 20)->nullable()->after('name');
            $table->string('email', 100)->nullable()->after('nomor_telephone');
            $table->date('tanggal_lahir',)->nullable()->after('email');
            $table->string('ukuran_kaos', 10)->nullable()->after('jenis_kelamin');
            $table->string('vegetarian', 100)->nullable()->after('ukuran_kaos');
            $table->string('alergi', 100)->nullable()->after('vegetarian');
            $table->string('nama_sekolah', 100)->nullable()->after('alergi');
            $table->string('alamat_kota', 255)->nullable()->after('nama_sekolah');
            $table->string('provinsi', 100)->nullable()->after('alamat_kota');
            $table->string('nama_ayah', 100)->nullable()->after('provinsi');
            $table->string('no_hp_ayah', 100)->nullable()->after('nama_ayah');
            $table->string('email_ayah', 100)->nullable()->after('no_hp_ayah');
            $table->string('pekerjaan_ayah', 100)->nullable()->after('email_ayah');
            $table->string('nama_ibu', 100)->nullable()->after('pekerjaan_ayah');
            $table->string('no_hp_ibu', 100)->nullable()->after('nama_ibu');
            $table->string('email_ibu', 100)->nullable()->after('no_hp_ibu');
            $table->string('pekerjaan_ibu', 100)->nullable()->after('email_ibu');















        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peserta', function (Blueprint $table) {
            $table -> dropColumn('nomor_telephone');
            $table -> dropColumn('email');
            $table -> dropColumn('tanggal_lahir');
            $table -> dropColumn('ukuran_kaos');
            $table -> dropColumn('vegetarian');
            $table -> dropColumn('alergi');
            $table -> dropColumn('nama_sekolah');
            $table -> dropColumn('alamat_kota');
            $table -> dropColumn('provinsi');
            $table -> dropColumn('nama_ayah');
            $table -> dropColumn('no_hp_ayah');
            $table -> dropColumn('email_ayah');
            $table -> dropColumn('pekerjaan_ayah');
            $table -> dropColumn('nama_ibu');
            $table -> dropColumn('no_hp_ibu');
            $table -> dropColumn('email_ibu');
            $table -> dropColumn('pekerjaan_ibu');











        });
    }
}
