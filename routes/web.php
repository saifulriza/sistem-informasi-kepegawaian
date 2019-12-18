<?php
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

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function () {

Route::get('/pegawai', 'ListPegawaiController@beranda');

Route::get('/profile', function () {
    return view('pegawai.profile');
 });
Route::get('/list', 'ListPegawaiController@index');
Route::get('/pegawai/tambah', 'ListPegawaiController@tambah');
Route::post('/pegawai/tambah/proses', 'ListPegawaiController@tambah');
Route::post('/pegawai/edit/{id}', 'ListPegawaiController@edit');
Route::get('/pegawai/hapus/{id}','ListPegawaiController@hapus');
Route::get('/pegawai/profile/{id}','ListPegawaiController@profile');

Route::post('/pegawai/anak/tambah/proses', 'AnakController@proses');
Route::post('/pegawai/orangtua/tambah/proses', 'OrangtuaController@proses');
Route::post('/pegawai/suamiistri/tambah/proses', 'SuamiistriController@proses');

Route::post('/pegawai/diklat/tambah', 'DiklatController@tambah');
Route::post('/pegawai/diklat/edit/{id}', 'DiklatController@edit');
Route::post('/pegawai/diklat/hapus/{id}', 'DiklatController@hapus');
Route::get('/pegawai/riwayatdiklat/editpage/{id}/{id1}', 'DiklatController@editpage');


Route::post('/pegawai/gapok/tambah', 'RiwayatGapokController@tambah');
Route::post('/pegawai/gapok/edit/{id}', 'RiwayatGapokController@edit');
Route::get('/pegawai/gapok/editpage/{id}/{id1}', 'RiwayatGapokController@editpage');
Route::post('/pegawai/gapok/hapus/{id}', 'RiwayatGapokController@hapus');

Route::get('/pegawai/hukuman/editpage/{id}/{id1}', 'RiwayatHukumanController@editpage');
Route::post('/pegawai/hukuman/tambah', 'RiwayatHukumanController@tambah');
Route::post('/pegawai/hukuman/edit/{id}', 'RiwayatHukumanController@edit');
Route::post('/pegawai/hukuman/hapus/{id}', 'RiwayatHukumanController@hapus');

Route::post('/pegawai/jabatan/tambah', 'RiwayatJabatanController@tambah');
Route::get('/pegawai/jabatan/editpage/{id}/{id1}', 'RiwayatJabatanController@editpage');
Route::post('/pegawai/jabatan/edit/{id}', 'RiwayatJabatanController@edit');
Route::post('/pegawai/jabatan/hapus/{id}', 'RiwayatJabatanController@hapus');

Route::post('/pegawai/jabatanfungsional/tambah', 'RiwayatJabatanfController@tambah');
Route::post('/pegawai/jabatanfungsional/hapus/{id}', 'RiwayatJabatanfController@hapus');
Route::get('/pegawai/jabatanfungsional/editpage/{id}/{id1}', 'RiwayatJabatanfController@editpage');
Route::post('/pegawai/jabatanfungsional/edit/{id}', 'RiwayatJabatanfController@edit');

Route::post('/pegawai/jabatanfungsionalt/tambah', 'RiwayatJabatanftController@tambah');
Route::get('/pegawai/jabatanfungsionalt/editpage/{id}/{id1}', 'RiwayatJabatanftController@editpage');
Route::post('/pegawai/jabatanfungsionalt/edit/{id}', 'RiwayatJabatanftController@edit');
Route::post('/pegawai/jabatanfungsionalt/hapus/{id}', 'RiwayatJabatanftController@hapus');

Route::get('/pegawai/tmagama/tambah', 'TmAgamaController@index');
Route::post('/pegawai/tmagama/tambah/proses', 'TmAgamaController@tambah');
Route::get('/pegawai/tmagama/hapus/{id}', 'TmAgamaController@hapus');

Route::get('/pegawai/tmdiklat/tambah', 'TmDiklatController@index');
Route::post('/pegawai/tmdiklat/tambah/proses', 'TmDiklatController@tambah');
Route::get('/pegawai/tmdiklat/hapus/{id}', 'TmDiklatController@hapus');

Route::get('/pegawai/tmgapok/tambah', 'TmGapokController@index');
Route::post('/pegawai/tmgapok/tambah/proses', 'TmGapokController@tambah');
Route::get('/pegawai/tmgapok/hapus/{id}', 'TmGapokController@hapus');


Route::get('/pegawai/tmgolongan/tambah', 'TmGolonganController@index');
Route::post('/pegawai/tmgolongan/tambah/proses', 'TmGolonganController@tambah');
Route::get('/pegawai/tmgolongan/hapus/{id}', 'TmGolonganController@hapus');


Route::get('/pegawai/tmjabatanf/tambah', 'TmJabatanfController@index');
Route::post('/pegawai/tmjabatanf/tambah/proses', 'TmJabatanfController@tambah');
Route::get('/pegawai/tmjabatanf/hapus/{id}', 'TmJabatanfController@hapus');


Route::get('/pegawai/tmjabatanft/tambah', 'TmJabatanFtController@index');
Route::post('/pegawai/tmjabatanft/tambah/proses', 'TmJabatanFtController@tambah');
Route::get('/pegawai/tmjabatanft/hapus/{id}', 'TmJabatanFtController@hapus');


Route::get('/pegawai/tmjabatans/tambah', 'TmJabatanstrukturalController@index');
Route::post('/pegawai/tmjabatans/tambah/proses', 'TmJabatanstrukturalController@tambah');
Route::get('/pegawai/tmjabatans/hapus/{id}', 'TmJabatanstrukturalController@hapus');


Route::get('/pegawai/tmpendidikan/tambah', 'TmPendidikanController@index');
Route::post('/pegawai/tmpendidikan/tambah/proses', 'TmPendidikanController@tambah');
Route::get('/pegawai/tmpendidikan/hapus/{id}', 'TmPendidikanController@hapus');

Route::get('/pegawai/grafik', 'GrafikController@index');

});