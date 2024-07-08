<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected $table = "group";


    public function peserta_sparta()
    {
        return $this->hasMany(peserta_sparta::class ,'id_group', 'id' );
    }

    public function peserta_ninja()
    {
        return $this->hasMany(peserta_ninja::class ,'id_group', 'id' );
    }

    public function peserta_apache()
    {
        return $this->hasMany(peserta_apache::class ,'id_group', 'id' );
    }

    public function peserta_musketeer()
    {
        return $this->hasMany(peserta_musketeer::class ,'id_group', 'id' );
    }


}
