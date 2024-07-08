<?php

namespace App\Http\Controllers;

use App\Imports\PesertaImport;
use App\Models\group;
use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Models\peserta_ninja;
use App\Models\peserta_apache;
use App\Models\peserta_sparta;
use App\Models\peserta_temp;
use App\Models\peserta_musketeer;
use App\Models\peserta_perempuan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session as FacadesSession;
use Yajra\DataTables\Contracts\DataTable as datable;
use Yajra\DataTables\Contracts\DataTable;

use function PHPUnit\Framework\isNull;

class pesertaController extends Controller
{
public function index(Request $request){

        $keyword = $request -> keyword;
            // $ambilsemua = Peserta::all();
            // $dataaray = $ambilsemua->toArray();
            // dd($dataaray);
            $peserta_laki = Peserta::where('jenis_kelamin', 'l')->orderBy('umur', 'desc')->get();
            $peserta_perempuan = Peserta::where('jenis_kelamin', 'P')->orderBy('umur', 'desc')->get();
            // $peserta = Peserta::paginate(50);
            $peserta = peserta::where('name', 'LIKE', '%'.$keyword.'%')
                                ->orWhere('nama_ayah', 'LIKE', '%'.$keyword.'%')
                                ->paginate(20);
            $jumlah_peserta_laki = Peserta::where('jenis_kelamin', 'l')->count();
            $jumlah_peserta_perempuan = Peserta::where('jenis_kelamin', 'p')->count();
            $jumlah_peserta_tidak_terdefinisi = Peserta::whereNull('jenis_kelamin')->whereNull('umur')->count();
            $jumlah_peserta_total = Peserta::all()->count();


       // dd($peserta_laki + $peserta_perempuan);
        return view('peserta', ['peserta' => $peserta,
                                             'jumlah_peserta_laki' => $jumlah_peserta_laki,
                                             'jumlah_peserta_perempuan' => $jumlah_peserta_perempuan,
                                             'jumlah_peserta_total' => $jumlah_peserta_total,
                                             'jumlah_peserta_tidak_terdefinisi' => $jumlah_peserta_tidak_terdefinisi]);
    }




    public function import(Request $request)
    {
        Peserta::truncate();

        // // dd($request->file('file'));
        Excel::import(new PesertaImport, $request -> file('file'));

        FacadesSession::flash('status-import','oke');
        FacadesSession::flash('message-import','berhasil import!!');
        return redirect('/proses');
    }

    public function reset(){
        peserta::truncate();
        peserta_temp::truncate();
        peserta_sparta::truncate();
        peserta_ninja::truncate();
        peserta_musketeer::truncate();
        peserta_apache::truncate();
        // group::truncate();

        return redirect('/peserta');
    }

    public function proses(){
        peserta_temp::truncate();
        peserta_sparta::truncate();
        peserta_ninja::truncate();
        peserta_musketeer::truncate();
        peserta_apache::truncate();


        $jumlah_peserta_total = Peserta::all()->count();

        $total_peserta_dalam_house = $jumlah_peserta_total / 4;

        $total_kelompok_dalam_house = round($total_peserta_dalam_house/10);

        $peserta_copy = Peserta::orderBy('umur', 'desc')->get();

        foreach ($peserta_copy as $pc) {
            DB::table('peserta_temp') -> insert([
                'id_peserta' => $pc->id,
                'name' => $pc->name,
                'umur' => $pc->umur,
                'jenis_kelamin' => $pc->jenis_kelamin,
                'nama_ayah' => $pc->nama_ayah,
                'nama_ibu' => $pc -> nama_ibu,
                'ukuran_kaos' =>$pc ->ukuran_kaos,

            ]);
        }


        $i = 1;
        while($i <= $jumlah_peserta_total)  {
        // $a = DB::table('peserta') -> orderBy('umur', 'desc')->get();

        if(peserta_sparta::count() <= $total_peserta_dalam_house){
            $ambil_peserta= DB::table('peserta_temp')->orderBy('umur', 'desc')->limit(1)->get();

            foreach ($ambil_peserta as $g) {
                DB::table('peserta_sparta') -> insert([
                    'id_peserta' => $g->id,
                    'name' => $g->name,
                    'umur' => $g->umur,
                    'jenis_kelamin' => $g->jenis_kelamin,
                    'nama_ayah' => $g -> nama_ayah,
                    'nama_ibu' => $g -> nama_ibu,
                    'ukuran_kaos' => $g->ukuran_kaos
                    // 'kode_group' => 'S'.$i
                ]);

            }
        DB::table('peserta_temp') -> orderBy('umur', 'desc')->take(1)->delete();
        }
        if(peserta_ninja::count() <= $total_peserta_dalam_house){
            $ambil_peserta= DB::table('peserta_temp')->orderBy('umur', 'desc')->limit(1)->get();


                foreach ($ambil_peserta as $g) {
                    DB::table('peserta_ninja') -> insert([
                        'id_peserta' => $g->id,
                        'name' => $g->name,
                        'umur' => $g->umur,
                        'jenis_kelamin' => $g->jenis_kelamin,
                        'nama_ayah' => $g -> nama_ayah,
                        'nama_ibu' => $g -> nama_ibu,
                        'ukuran_kaos' => $g->ukuran_kaos,
                        // 'kode_group' => 'N'.$i
                    ]);

                }
        DB::table('peserta_temp') -> orderBy('umur', 'desc')->take(1)->delete();
        }
        if(peserta_apache::count() <= $total_peserta_dalam_house){
            $ambil_peserta= DB::table('peserta_temp')->orderBy('umur', 'desc')->limit(1)->get();

                    foreach ($ambil_peserta as $g) {
                        DB::table('peserta_apache') -> insert([
                            'id_peserta' => $g->id,
                            'name' => $g->name,
                            'umur' => $g->umur,
                            'jenis_kelamin' => $g->jenis_kelamin,
                            'nama_ayah' => $g -> nama_ayah,
                            'nama_ibu' => $g -> nama_ibu,
                            'ukuran_kaos' => $g->ukuran_kaos,
                            // 'kode_group' => 'A'.$i
                        ]);

                    }

                    DB::table('peserta_temp') -> orderBy('umur', 'desc')->take(1)->delete();
            }
            $ambil_peserta= DB::table('peserta_temp')->orderBy('umur', 'desc')->limit(1)->get();

            foreach ($ambil_peserta as $g) {
                DB::table('peserta_musketeer') -> insert([
                    'id_peserta' => $g->id,
                    'name' => $g->name,
                    'umur' => $g->umur,
                    'jenis_kelamin' => $g->jenis_kelamin,
                    'nama_ayah' => $g -> nama_ayah,
                    'nama_ibu' => $g -> nama_ibu,
                    'ukuran_kaos' => $g->ukuran_kaos,
                    // 'kode_group' => 'M'.$i
                ]);

            }

            DB::table('peserta_temp') -> orderBy('umur', 'desc')->take(1)->delete();


    $i++;
    }
    if (peserta_sparta::all()->count() > 0) {
        FacadesSession::flash('status-sort','oke');
        FacadesSession::flash('message-sort','berhasil tersorting!!');
        return redirect('/berinamagroup');
    }else {
        return redirect()->back()->withErrors(['error' => 'Gagal mengimpor data. Silakan coba lagi.']);

    }

    }

     public function berinamagroup(){
        $jumlah_maksimum_peserta_per_grup = 10;
        $peserta_sparta = peserta_sparta::all();
        $nomor_grup = 1;
        foreach ($peserta_sparta as $index => $peserta) {
            $peserta->kode_group = 'S' . $nomor_grup;
            $peserta->id_group = 10 . $nomor_grup;
            if (($index + 1) % $jumlah_maksimum_peserta_per_grup === 0) {
                $nomor_grup++;
            }
            $peserta->save();
        }
        $nomor_grup = 1;
        $peserta_ninja = peserta_ninja::all();
        foreach ($peserta_ninja as $index => $peserta) {
            $peserta->kode_group = 'N' . $nomor_grup;
            $peserta->id_group = 20 . $nomor_grup;
            if (($index + 1) % $jumlah_maksimum_peserta_per_grup === 0) {
                $nomor_grup++;
            }
            $peserta->save();
        }
        $nomor_grup = 1;
        $peserta_apache = peserta_apache::all();
        foreach ($peserta_apache as $index => $peserta) {
            $peserta->kode_group = 'A' . $nomor_grup;
            $peserta->id_group = 30 . $nomor_grup;
            if (($index + 1) % $jumlah_maksimum_peserta_per_grup === 0) {
                $nomor_grup++;
            }
            $peserta->save();
        }
        $nomor_grup = 1;
         $peserta_musketeer = peserta_musketeer::all();
        foreach ($peserta_musketeer as $index => $peserta) {
            $peserta->kode_group = 'M' . $nomor_grup;
            $peserta->id_group = 40 . $nomor_grup;
            if (($index + 1) % $jumlah_maksimum_peserta_per_grup === 0) {
                $nomor_grup++;
            }
            $peserta->save();
        }

        return redirect('/peserta');




    }

    public function pesertaEdit($id){
        $data = Peserta::findOrFail($id);
       // dd($data);
       return view('edit_form_peserta', ['data' => $data]);
    }

    public function pesertaEditProcess(Request $request ,$id){
        $data = Peserta::findOrFail($id);
        $data ['name'] = $request -> name;
        $data ['nomor_telephone'] = $request -> nomor_telephone;
        $data ['email'] = $request -> email;
        $data ['tanggal_lahir'] = $request -> tanggal_lahir;
        $data ['umur'] = $request -> umur;
        $data ['jenis_kelamin'] = $request -> jenis_kelamin;
        $data ['ukuran_kaos'] = $request -> ukuran_kaos;
        $data ['vegetarian'] = $request -> vegetarian;
        $data ['alergi'] = $request -> alergi;
        $data ['nama_sekolah'] = $request -> nama_sekolah;
        $data ['alamat_kota'] = $request -> alamat_kota;
        $data ['provinsi'] = $request -> provinsi;
        $data ['nama_ayah'] = $request -> nama_ayah;
        $data ['no_hp_ayah'] = $request -> no_hp_ayah;
        $data ['email_ayah'] = $request -> email_ayah;
        $data ['pekerjaan_ayah'] = $request -> pekerjaan_ayah;
        $data ['nama_ibu'] = $request -> nama_ibu;
        $data ['no_hp_ibu'] = $request -> no_hp_ibu;
        $data ['email_ibu'] = $request -> email_ibu;
        $data ['pekerjaan_ibu'] = $request -> pekerjaan_ibu;
        $status = $data -> save();
        if($status){
            FacadesSession::flash('status-edit','oke');
            FacadesSession::flash('message-edit','berhasil teredit!');

        }return redirect('/peserta');
    }

    public function pesertaDetail($id){
        $data = Peserta::findOrFail($id);
       // dd($data);
       return view('detail_peserta', ['data' => $data]);
    }


    public function pindahpesertasparta($id){
        $peserta = peserta_sparta::FindOrFail($id);
        $groupsparta = peserta_sparta::distinct()->pluck('kode_group');
        $groupninja = peserta_ninja::distinct()->pluck('kode_group');
        $groupapache = peserta_apache::distinct()->pluck('kode_group');
        $groupmusketeer = peserta_musketeer::distinct()->pluck('kode_group');
        return view('pindah-sparta', ['peserta' => $peserta,
                                                    'groupninja' => $groupninja,
                                                    'groupapache' => $groupapache,
                                                    'groupmusketeer' => $groupmusketeer,
                                                    'groupsparta'=>$groupsparta
                                                ]);
    }

    public function pindahpesertaninja($id){
        $peserta = peserta_ninja::FindOrFail($id);
        $groupsparta = peserta_sparta::distinct()->pluck('kode_group');
        $groupninja = peserta_ninja::distinct()->pluck('kode_group');
        $groupapache = peserta_apache::distinct()->pluck('kode_group');
        $groupmusketeer = peserta_musketeer::distinct()->pluck('kode_group');
        return view('pindah-ninja', ['peserta' => $peserta,
                                                    'groupmusketeer' => $groupmusketeer,
                                                    'groupapache' => $groupapache,
                                                    'groupsparta' => $groupsparta,
                                                    'groupninja' =>$groupninja]);
    }

    public function pindahpesertaapache($id){
        $peserta = peserta_apache::FindOrFail($id);
        $groupsparta = peserta_sparta::distinct()->pluck('kode_group');
        $groupninja = peserta_ninja::distinct()->pluck('kode_group');
        $groupapache = peserta_apache::distinct()->pluck('kode_group');
        $groupmusketeer = peserta_musketeer::distinct()->pluck('kode_group');
        return view('pindah-apache', ['peserta' => $peserta,
                                                    'groupninja' => $groupninja,
                                                    'groupmusketeer' => $groupmusketeer,
                                                    'groupsparta' => $groupsparta,
                                                    'groupapache' => $groupapache]);
    }


    public function pindahpesertamusketeer($id){
        $peserta = peserta_musketeer::FindOrFail($id);
        $groupsparta = peserta_sparta::distinct()->pluck('kode_group');
        $groupninja = peserta_ninja::distinct()->pluck('kode_group');
        $groupapache = peserta_apache::distinct()->pluck('kode_group');
        $groupmusketeer = peserta_musketeer::distinct()->pluck('kode_group');
        return view('pindah-musketeer', ['peserta' => $peserta,
                                                    'groupninja' => $groupninja,
                                                    'groupapache' => $groupapache,
                                                    'groupsparta' => $groupsparta,
                                                    'groupmusketeer' => $groupmusketeer,]);
    }

    public function prosespindahpeserta(Request $request,$id){
        if ($request->house == 'sparta') {
        $peserta = peserta_sparta::findOrFail($id);
        }elseif ($request->house == 'ninja') {
        $peserta = peserta_ninja::findOrFail($id);
        }elseif ($request->house == 'apache') {
        $peserta = peserta_apache::findOrFail($id);
        }elseif ($request->house == 'musketeer') {
        $peserta = peserta_musketeer::findOrFail($id);
        }else{
            dd('gagal');
        }
        $peserta->kode_group = $request->kode_group;
        $peserta->save();
    // Tentukan model yang sesuai berdasarkan kode_group
    $subtitusipeserta = null;
    switch ($request->kode_group[0]) {
        case 'S':
            $subtitusipeserta = new peserta_sparta();
            $idgroup = 10;
            break;
        case 'N':
            $subtitusipeserta = new peserta_ninja();
            $idgroup = 20;
            break;
        case 'A':
            $subtitusipeserta = new peserta_apache();
            $idgroup = 30;
            break;
        case 'M':
            $subtitusipeserta = new peserta_musketeer();
            $idgroup = 40;
            break;
        default:
            dd('salah');
            break;
    }

    // Masukkan data peserta ke model yang sesuai dan simpan
    $subtitusipeserta->id_peserta = $peserta->id_peserta; // Contoh, sesuaikan dengan kolom yang ada
    $subtitusipeserta->name = $peserta->name; // Contoh, sesuaikan dengan kolom yang ada
    $subtitusipeserta->jenis_kelamin = $peserta->jenis_kelamin; // Contoh, sesuaikan dengan kolom yang ada
    $subtitusipeserta->umur = $peserta->umur;
    $subtitusipeserta->nama_ayah = $peserta->nama_ayah;
    $subtitusipeserta->nama_ibu = $peserta->nama_ibu;
    $subtitusipeserta->ukuran_kaos = $peserta->ukuran_kaos ;// Contoh, sesuaikan dengan kolom yang ada
    $subtitusipeserta->kode_group = $peserta->kode_group; // Contoh, sesuaikan dengan kolom yang ada
    $subtitusipeserta->id_group = $idgroup.$request->kode_group[1];
    $subtitusipeserta -> save();
    // Hapus peserta_sparta setelah dipindahkan
    $peserta->delete();

    return redirect('/hasil-'.$request->house);

    }



    public function hasil_sparta(Request $request){
        $data = group::has('peserta_sparta')->with(['peserta_sparta'])->where('group_name', 'LIKE', '%sparta%')->get();
        // dd($data);
        // $data = peserta_sparta::orderBy('kode_group')->get();
        return view('hasil_sparta', ['data' => $data]);

    }


    public function hasil_ninja(){

        $data = group::has('peserta_ninja')->with(['peserta_ninja'])->where('group_name', 'LIKE', '%ninja%')->get();

        // dd($data);
        //return view('hasil_ninja', ['data' => $data]);
        return view('hasil_ninja', ['data' => $data]);
    }



    public function hasil_apache(){

        $data = group::has('peserta_apache')->with(['peserta_apache'])->where('group_name', 'LIKE', '%apache%')->get();

        // dd($data);
        //return view('hasil_apache', ['data' => $data]);
        return view('hasil_apache', ['data' => $data]);
    }

    public function hasil_musketeer(){

        $data = group::has('peserta_musketeer')->with(['peserta_musketeer'])->where('group_name', 'LIKE', '%musketeer%')->get();

        // dd($data);
        //return view('hasil_musketeer', ['data' => $data]);
        return view('hasil_musketeer', ['data' => $data]);
    }
}
