<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = "peserta";

    protected $fillable =[
            'name',
            'nomor_telephone',
            'email' ,
            'tanggal_lahir' ,
            'umur' ,
            'jenis_kelamin' ,
            'ukuran_kaos' ,
            'vegetarian' ,
            'alergi' ,
            'nama_sekolah' ,
            'alamat_kota' ,
            'provinsi' ,
            'nama_ayah' ,
            'no_hp_ayah' ,
            'email_ayah' ,
            'pekerjaan_ayah' ,
            'nama_ibu' ,
            'no_hp_ibu' ,
            'email_ibu' ,
            'pekerjaan_ibu'
    ];
}
