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

Route::group(['prefix' => 'master'], function(){
    // route untuk jurusan dan kelas
    route::get('jurusan-kelas','Master\JurusankelasController@index')->name('master.jurusan-kelas');
    route::get('tampilkan/form-baru','Master\JurusankelasController@create')->name('master.tampilkan.form-baru');
    route::post('kirim/data/baru', 'Master\JurusankelasController@store')->name('master.kirim.data.baru');

    route::get('edit-jurusan/{jurusan}', 'Master\JurusankelasController@edit')->name('master.edit-jurusan');
    route::put('update/jurusan/{jurusan}', 'Master\JurusankelasController@update')->name('master.update.jurusan');
    route::delete('hapus/data/{jurusan}', 'Master\JurusankelasController@destroy')->name('master.hapus.data');

    // route master industri
    route::get('industri', 'Master\IndustriController@index')->name('master.industri');
    route::get('tampilkan/form-baru/industri', 'Master\IndustriController@create')->name('master.tampilkan.form-baru.industri');
    route::post('kirim/data/baru/industri', 'Master\IndustriController@store')->name('master.kirim.data.baru.industri');
  
    route::get('edit-industri/{industri}', 'Master\IndustriController@edit')->name('master.edit-industri');
    route::put('update/industri/{industri}', 'Master\IndustriController@update')->name('master.update-industri');
    route::delete('hapus/data/industri/{industri}', 'Master\IndustriController@destroy')->name('master.hapus.data.industri');

    // master pkl
    route::get('pkl', 'Master\PklController@index')->name('master.pkl');
    route::get('tampilkan/detail/permohonan/pkl-psg', 'Master\PklController@show')->name('master.tampilkan.detail.permohonan.pkl-psg');

    //master nilai
    route::get('nilai', 'Master\NilaiController@index')->name('master.nilai');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/youtube','YoutubeController@index')->name('youtube');

Route::get('watch/Spongebob-Squarepants','YoutubeController@show')->name('watch.Spongebob-Squarepants');