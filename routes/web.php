<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\pesertaController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/peserta');
});

Route::get('peserta', [pesertaController::class , 'index']
);

Route::get('search', [searchController::class , 'search']
);

Route::get('search_sparta', [searchController::class , 'search_sparta']
);

Route::get('search_ninja', [searchController::class , 'search_ninja']
);

Route::get('search_apache', [searchController::class , 'search_apache']
);

Route::get('search_musketeer', [searchController::class , 'search_musketeer']
);

Route::get('peserta-edit/{id}', [pesertaController::class , 'pesertaEdit']
);

Route::get('peserta-edit-process/{id}', [pesertaController::class , 'pesertaEditProcess']
);

Route::get('peserta-detail/{id}', [pesertaController::class , 'pesertaDetail']
);

Route::get('proses', [pesertaController::class , 'proses']
);

Route::get('reset', [pesertaController::class , 'reset']
);

Route::get('berinamagroup', [pesertaController::class, 'berinamagroup']);

Route::get('proses2', [pesertaController::class , 'proses2']
);


Route::post('peserta-import', [pesertaController::class , 'import']
);


Route::get('hasil-sparta', [pesertaController::class , 'hasil_sparta']
);

Route::get('eksport-sparta', [ExportController::class, 'exportPesertaSparta']);


Route::get('hasil-ninja', [pesertaController::class , 'hasil_ninja']
);

Route::get('eksport-ninja', [ExportController::class, 'exportPesertaNinja']);


Route::get('hasil-musketeer', [pesertaController::class , 'hasil_musketeer']
);

Route::get('eksport-musketeer', [ExportController::class, 'exportPesertaMusketeer']);


Route::get('hasil-apache', [pesertaController::class , 'hasil_apache']
);

Route::get('eksport-apache', [ExportController::class, 'exportPesertaApache']);

Route::get('eksport-all', [ExportController::class, 'exportAllTables']);

Route::get('login', [authController::class, 'login']);

Route::post('login-masuk', [authController::class, 'authenticating']);


Route::get('pindah_sparta/{id}', [pesertaController::class, 'pindahpesertasparta']);
Route::get('pindah_ninja/{id}', [pesertaController::class, 'pindahpesertaninja']);
Route::get('pindah_apache/{id}', [pesertaController::class, 'pindahpesertaapache']);
Route::get('pindah_musketeer/{id}', [pesertaController::class, 'pindahpesertamusketeer']);



Route::post('/proses_pindah_sparta/{id}', [pesertaController::class, 'prosespindahpeserta']);
Route::post('/proses_pindah_ninja/{id}', [pesertaController::class, 'prosespindahpeserta']);
Route::post('/proses_pindah_apache/{id}', [pesertaController::class, 'prosespindahpeserta']);
Route::post('/proses_pindah_musketeer/{id}', [pesertaController::class, 'prosespindahpeserta']);










