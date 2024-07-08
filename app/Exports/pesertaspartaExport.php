<?php

namespace App\Exports;

use App\Models\peserta_sparta;
use Maatwebsite\Excel\Concerns\FromCollection;

class pesertaspartaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peserta_sparta::select('id_peserta', 'name', 'jenis_kelamin', 'umur', 'nama_ayah','kode_group')->orderBy('kode_group') ->get();
    }

    public function title(): string
    {
        return 'peserta_sparta';
    }
}
