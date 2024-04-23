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

Route::get('/about', function () {

    $nama = "restu";
    $jenis_kelamin = "laki-laki";
    $pendidikan = "SMK";
    $pekerjaan = "nganggur";
    $alamat = "bdg";

    return view('data_diri',compact('nama','jenis_kelamin','pendidikan','pekerjaan','alamat'));
});

Route::get('/me', function () {

    $nama = "Restu";
    $umur = "17th";
    $lahir = "Bandung-23-11-2006";
    $jenis = "laki";
    $tentang = "saya adalah siswa smk assalaam bdg jurusan RPL, saya anak ke dua dari 3 bersaudara,hobi saya adalah bermain game";

    return view('about_me',compact('nama','umur','lahir','jenis','tentang'));
});