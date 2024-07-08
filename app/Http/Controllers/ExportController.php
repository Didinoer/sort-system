<?php

namespace App\Http\Controllers;

use App\Exports\Allpesertalifecampeksport;
use Illuminate\Http\Request;
use App\Exports\pesertaninjaExport;
use App\Exports\pesertaapacheExport;
use App\Exports\pesertaspartaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\pesertamusketeerExport;

class ExportController extends Controller
{
    public function exportPesertaSparta()
    {

        return Excel::download(new pesertaspartaExport, 'pesertaSparta.xlsx');
    }

    public function exportPesertaNinja()
    {

        return Excel::download(new pesertaninjaExport, 'pesertaNinja.xlsx');
    }

    public function exportPesertaApache()
    {

        return Excel::download(new pesertaapacheExport, 'pesertaApache.xlsx');
    }

    public function exportPesertaMusketeer()
    {

        return Excel::download(new pesertamusketeerExport, 'pesertaMusketeer.xlsx');
    }

    public function exportAllTables()
    {
        return Excel::download(new Allpesertalifecampeksport, 'all_tables.xlsx');
    }
}
