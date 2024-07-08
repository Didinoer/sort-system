<?php

namespace App\Imports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\ToModel;

class PesertaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Peserta([
            'name'     => $row[0],
            'nomor_telephone'    => $row[1],
            'email' => $row[2],
            'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]),
            'umur' => $row[4],
            'jenis_kelamin' => $row[5],
            'ukuran_kaos' => $row[6],
            'vegetarian' => $row[7],
            'alergi' => $row[8],
            'nama_sekolah' => $row[9],
            'alamat_kota' => $row[10],
            'provinsi' => $row[11],
            'nama_ayah' => $row[12],
            'no_hp_ayah' => $row[13],
            'email_ayah' => $row[14],
            'pekerjaan_ayah' => $row[15],
            'nama_ibu' => $row[16],
            'no_hp_ibu' => $row[17],
            'email_ibu' => $row[18],
            'pekerjaan_ibu' => $row[19]
        ]);
    }
}
