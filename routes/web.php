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

Route::get('/dosen', function(){
    $dosens = ["Aji Primajaya","Ratna Mufidah","Purwantoro","Rini Mayasari","Adhi Rizal",
                "Arip Solehudin","Iqbal Maulana","Rochana","Oman Komarudin","Dadang Yusup"];
    return view('layout.dosen', [
        'dosens' => $dosens
    ]);
})->name('layout.dosen');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Muhamad Rizky Darmawan","Jonathan Hutahaean","Putri Aulia Kusnadi",
                    "Ray Rizky Fawzy","Nanda Sukarno","Andriani Nurian","Fauzan Arista Alamsyah",
                    "Silfa Sofiana Lestari","Heri Kurniawan","Indira Nur Amalia"];
    return view('layout.mahasiswa', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('layout.mahasiswa');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Framework Pemrograman Web","Data Mining","Pemrograman Berbasis Web","Technopreneur",
                    "Blockchain","Cloud Computing","Statistika dan Probabilitas","Budaya Bangsa",
                    "Rekayasa Perangkat Lunak","Pemrograman Berbasis Web"];
    return view('layout.matakuliah', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('layout.matakuliah');
