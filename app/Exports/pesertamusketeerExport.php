<?php

namespace App\Exports;

use App\Models\peserta_musketeer;
use Maatwebsite\Excel\Concerns\FromCollection;

class pesertamusketeerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peserta_musketeer::select('id_peserta', 'name', 'jenis_kelamin', 'umur', 'nama_ayah','kode_group')->orderBy('kode_group') ->get();
    }

    public function title(): string
    {
        return 'peserta_musketeer';
    }
}
