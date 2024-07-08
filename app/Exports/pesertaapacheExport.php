<?php

namespace App\Exports;

use App\Models\peserta_apache;
use Maatwebsite\Excel\Concerns\FromCollection;

class pesertaapacheExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peserta_apache::select('id_peserta', 'name', 'jenis_kelamin', 'umur', 'nama_ayah','kode_group')->orderBy('kode_group') ->get();
    }

    public function title(): string
    {
        return 'peserta_apache';
    }
}
