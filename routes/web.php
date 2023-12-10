<?php

use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\M4Controller;
use App\Http\Controllers\M5Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AnggotaController;

//Latihan8
Route::middleware('auth')->group(function(){
    Route::get('password', [UserController::class, 'password'])->name('user.password');
    Route::post('password', [UserController::class, 'passwordAction'])->name('user.password.action');
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
    Route::resource('user', UserController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::resource('kategori', KategoriController::class);
});


//Perpus
Route::get('login', [UserController::class, 'Login'])->name('login');
Route::post('login', [UserController::class, 'LoginAction'])->name('user.login.action');


//M5
Route::get('m5/lat1', [M5Controller::class, 'lat1']);
Route::get('m5/lat2', [M5Controller::class, 'lat2']);
Route::post('m5/lat2_action', [M5Controller::class, 'lat2Action'])->name ('m5.lat2.action');
Route::get('m5/volume', [M5Controller::class, 'volume']);
Route::post('m5/volume_action', [M5Controller::class, 'volumeAction'])->name ('m5.volume.action');
Route::get('m5/luas', [M5Controller::class, 'luas']);
Route::post('m5/luas_action', [M5Controller::class, 'luasAction'])->name ('m5.luas.action');


// M4
Route::get('m4/lat1', [M4Controller::class, 'lat1']);
Route::get('m4/lat2', [M4Controller::class, 'lat2']);
Route::get('m4/lat3', [M4Controller::class, 'lat3']);

Route::get('m4/identitas', [M4Controller::class, 'm4_identitas'])->name ('m4.identitas');
Route::get('m4/pendidikan', [M4Controller::class, 'm4_pendidikan'])->name ('m4.pendidikan');
Route::get('m4/skill', [M4Controller::class, 'm4_skill'])->name ('m4.skill');

Route::get('/identitas', [CVController::class, 'identitas'])->name ('identitas');
Route::get('/pendidikan', [CVController::class, 'pendidikan'])->name ('pendidikan');
Route::get('/skill', [CVController::class, 'skill'])->name ('skill');

Route::get('m4/alamat', [M4Controller::class, 'alamat'])->name ('m4.alamat');
Route::get('m4/nilai', [M4Controller::class, 'nilai'])->name ('m4.nilai');
Route::get('m4/warna', [M4Controller::class, 'warna'])->name ('m4.warna');


//Latihan Sebelumnya
Route::view('/home/', 'home');

Route::get('/awal', function(){
    $url = route('kontak');
    echo '<a href="'.$url.'">Klik di sini untuk ke halaman kontak</a>';

});Route::get('/kontak', function(){
    echo 'Halo ini adalah halaman kontak yang terbuka dari link route awal';
})->name('kontak');

Route::get('/detail/{nama}/{asal?}', function($nama, $asal=''){
    echo 'Hello, nama saya adalah '. $nama. ' saya berasal dari '. $asal;
});

Route::get('/tampil/{nama}', function($nama){
    echo 'Hello, nama saya adalah ', $nama;
});

Route::get('/greeting', function(){
    echo 'Hello, saya sudah bisa route laravel';
});















/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
