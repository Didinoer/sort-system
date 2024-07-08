<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class Allpesertalifecampeksport implements WithMultipleSheets
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {

        $sheets = [

        'peserta_sparta' => new pesertaspartaExport(),
        'peserta_ninja' => new pesertaninjaExport(),
        'peserta_apache' => new pesertaapacheExport(),
        'peserta_musketeer' => new pesertamusketeerExport(),
        ];


        return $sheets;
    }

}
