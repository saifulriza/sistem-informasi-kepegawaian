<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/pegawai', [App\Http\Controllers\ListPegawaiController::class, 'beranda']);

    Route::get('/profile', function () {
        return view('pegawai.profile');
    });
    Route::get('/list', [App\Http\Controllers\ListPegawaiController::class, 'index']);
    Route::get('/pegawai/tambah', [App\Http\Controllers\ListPegawaiController::class, 'tambah']);
    Route::post('/pegawai/tambah/proses', [App\Http\Controllers\ListPegawaiController::class, 'tambah']);
    Route::post('/pegawai/edit/{id}', [App\Http\Controllers\ListPegawaiController::class, 'edit']);
    Route::get('/pegawai/hapus/{id}', [App\Http\Controllers\ListPegawaiController::class, 'hapus']);
    Route::get('/pegawai/profile/{id}', [App\Http\Controllers\ListPegawaiController::class, 'profile']);

    Route::post('/pegawai/anak/tambah/proses', [App\Http\Controllers\AnakController::class, 'proses']);
    Route::post('/pegawai/orangtua/tambah/proses', [App\Http\Controllers\OrangtuaController::class, 'proses']);
    Route::post('/pegawai/suamiistri/tambah/proses', [App\Http\Controllers\SuamiistriController::class, 'proses']);

    Route::post('/pegawai/diklat/tambah', [App\Http\Controllers\DiklatController::class, 'tambah']);
    Route::post('/pegawai/diklat/edit/{id}', [App\Http\Controllers\DiklatController::class, 'edit']);
    Route::post('/pegawai/diklat/hapus/{id}', [App\Http\Controllers\DiklatController::class, 'hapus']);
    Route::get('/pegawai/riwayatdiklat/editpage/{id}/{id1}', [App\Http\Controllers\DiklatController::class, 'editpage']);


    Route::post('/pegawai/gapok/tambah', [App\Http\Controllers\RiwayatGapokController::class, 'tambah']);
    Route::post('/pegawai/gapok/edit/{id}', [App\Http\Controllers\RiwayatGapokController::class, 'edit']);
    Route::get('/pegawai/gapok/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatGapokController::class, 'editpage']);
    Route::post('/pegawai/gapok/hapus/{id}', [App\Http\Controllers\RiwayatGapokController::class, 'hapus']);

    Route::get('/pegawai/hukuman/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatHukumanController::class, 'editpage']);
    Route::post('/pegawai/hukuman/tambah', [App\Http\Controllers\RiwayatHukumanController::class, 'tambah']);
    Route::post('/pegawai/hukuman/edit/{id}', [App\Http\Controllers\RiwayatHukumanController::class, 'edit']);
    Route::post('/pegawai/hukuman/hapus/{id}', [App\Http\Controllers\RiwayatHukumanController::class, 'hapus']);

    Route::post('/pegawai/jabatan/tambah', [App\Http\Controllers\RiwayatJabatanController::class, 'tambah']);
    Route::get('/pegawai/jabatan/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatJabatanController::class, 'editpage']);
    Route::post('/pegawai/jabatan/edit/{id}', [App\Http\Controllers\RiwayatJabatanController::class, 'edit']);
    Route::post('/pegawai/jabatan/hapus/{id}', [App\Http\Controllers\RiwayatJabatanController::class, 'hapus']);

    Route::post('/pegawai/jabatanfungsional/tambah', [App\Http\Controllers\RiwayatJabatanfController::class, 'tambah']);
    Route::post('/pegawai/jabatanfungsional/hapus/{id}', [App\Http\Controllers\RiwayatJabatanfController::class, 'hapus']);
    Route::get('/pegawai/jabatanfungsional/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatJabatanfController::class, 'editpage']);
    Route::post('/pegawai/jabatanfungsional/edit/{id}', [App\Http\Controllers\RiwayatJabatanfController::class], 'edit');

    Route::post('/pegawai/jabatanfungsionalt/tambah', [App\Http\Controllers\RiwayatJabatanftController::class, 'tambah']);
    Route::get('/pegawai/jabatanfungsionalt/editpage/{id}/{id1}', [App\Http\Controllers\RiwayatJabatanftController::class, 'editpage']);
    Route::post('/pegawai/jabatanfungsionalt/edit/{id}', [App\Http\Controllers\RiwayatJabatanftController::class, 'edit']);
    Route::post('/pegawai/jabatanfungsionalt/hapus/{id}', [App\Http\Controllers\RiwayatJabatanftController::class, 'hapus']);

    Route::get('/pegawai/tmagama/tambah', [App\Http\Controllers\TmAgamaController::class, 'index']);
    Route::post('/pegawai/tmagama/tambah/proses', [App\Http\Controllers\TmAgamaController::class, 'tambah']);
    Route::get('/pegawai/tmagama/hapus/{id}', [App\Http\Controllers\TmAgamaController::class, 'hapus']);

    Route::get('/pegawai/tmdiklat/tambah', [App\Http\Controllers\TmDiklatController::class, 'index']);
    Route::post('/pegawai/tmdiklat/tambah/proses', [App\Http\Controllers\TmDiklatController::class, 'tambah']);
    Route::get('/pegawai/tmdiklat/hapus/{id}', [App\Http\Controllers\TmDiklatController::class, 'hapus']);

    Route::get('/pegawai/tmgapok/tambah', [App\Http\Controllers\TmGapokController::class, 'index']);
    Route::post('/pegawai/tmgapok/tambah/proses', [App\Http\Controllers\TmGapokController::class, 'tambah']);
    Route::get('/pegawai/tmgapok/hapus/{id}', [App\Http\Controllers\TmGapokController::class, 'hapus']);


    Route::get('/pegawai/tmgolongan/tambah', [App\Http\Controllers\TmGolonganController::class, 'index']);
    Route::post('/pegawai/tmgolongan/tambah/proses', [App\Http\Controllers\TmGolonganController::class, 'tambah']);
    Route::get('/pegawai/tmgolongan/hapus/{id}', [App\Http\Controllers\TmGolonganController::class, 'hapus']);


    Route::get('/pegawai/tmjabatanf/tambah', [App\Http\Controllers\TmJabatanfController::class, 'index']);
    Route::post('/pegawai/tmjabatanf/tambah/proses', [App\Http\Controllers\TmJabatanfController::class, 'tambah']);
    Route::get('/pegawai/tmjabatanf/hapus/{id}', [App\Http\Controllers\TmJabatanfController::class, 'hapus']);


    Route::get('/pegawai/tmjabatanft/tambah', [App\Http\Controllers\TmJabatanFtController::class, 'index']);
    Route::post('/pegawai/tmjabatanft/tambah/proses', [App\Http\Controllers\TmJabatanFtController::class, 'tambah']);
    Route::get('/pegawai/tmjabatanft/hapus/{id}', [App\Http\Controllers\TmJabatanFtController::class, 'hapus']);


    Route::get('/pegawai/tmjabatans/tambah', [App\Http\Controllers\TmJabatanstrukturalController::class, 'index']);
    Route::post('/pegawai/tmjabatans/tambah/proses', [App\Http\Controllers\TmJabatanstrukturalController::class, 'tambah']);
    Route::get('/pegawai/tmjabatans/hapus/{id}', [App\Http\Controllers\TmJabatanstrukturalController::class, 'hapus']);


    Route::get('/pegawai/tmpendidikan/tambah', [App\Http\Controllers\TmPendidikanController::class, 'index']);
    Route::post('/pegawai/tmpendidikan/tambah/proses', [App\Http\Controllers\TmPendidikanController::class, 'tambah']);
    Route::get('/pegawai/tmpendidikan/hapus/{id}', [App\Http\Controllers\TmPendidikanController::class, 'hapus']);

    Route::get('/pegawai/grafik', [App\Http\Controllers\GrafikController::class, 'index']);
});
