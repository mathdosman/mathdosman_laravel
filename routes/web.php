<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LuarController;
use App\Http\Controllers\LimitController;
use App\Http\Controllers\MatriksController;
use App\Http\Controllers\PeluangController;
use App\Http\Controllers\TurunanController;
use App\Http\Controllers\TransformasiController;
use App\Http\Controllers\BarisanDanDeretController;
use App\Http\Controllers\PersamaanKuadratController;

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

Route::get('/', function () {
    return view('luar.home');
});


Route::get('/login', function () {return view('auth.login');
    })->name('login');

Route::post('/proseslogin',[AuthController::class, 'proseslogin']);
Route::get('/proseslogout',[AuthController::class, 'proseslogout']);

Route::get('/materi',[LuarController::class, 'kumpulanmateri']);
Route::get('/privacy',[LuarController::class, 'privacy']);
Route::get('/disclaimer',[LuarController::class, 'disclaimer']);
Route::get('/ads.txt',[LuarController::class, 'ads']);


// 06 PERSAMAAN KUADRAT
Route::get('/Jumlah-dan-hasil-Kali-Akar',[PersamaanKuadratController::class, 'jumlahdanhasilkaliakar']);
Route::get('/menyelesaikan-persamaan-kuadrat',[PersamaanKuadratController::class, 'menyelesaikanpersamaankuadrat']);
Route::get('/persamaanKuadrat01',[PersamaanKuadratController::class, 'persamaanKuadrat01']);
Route::get('/persamaanKuadrat02',[PersamaanKuadratController::class, 'persamaanKuadrat02']);



// 10 MATRIKS
Route::get('/matriks01',[MatriksController::class, 'matriks01']);
Route::get('/creatematriks01',[MatriksController::class, 'creatematriks01']);
Route::get('/matriks02',[MatriksController::class, 'matriks02']);
Route::get('/creatematriks02',[MatriksController::class, 'creatematriks02']);
Route::get('/matriks03',[MatriksController::class, 'matriks03']);
Route::get('/creatematriks03',[MatriksController::class, 'creatematriks03']);
Route::get('/matriks04',[MatriksController::class, 'matriks04']);
Route::get('/creatematriks04',[MatriksController::class, 'creatematriks04']);
Route::get('/matriks05',[MatriksController::class, 'matriks05']);
Route::get('/creatematriks05',[MatriksController::class, 'creatematriks05']);


// 11 Transformasi
Route::get('/transgeomat',[TransformasiController::class, 'transgeomat']);
Route::get('/translasi01',[TransformasiController::class, 'translasi01']);
Route::get('/createtranslasi01',[TransformasiController::class, 'createtranslasi01']);
Route::get('/refleksi01',[TransformasiController::class, 'refleksi01']);
Route::get('/createrefleksi01',[TransformasiController::class, 'createrefleksi01']);
Route::get('/rotasi01',[TransformasiController::class, 'rotasi01']);
Route::get('/createrotasi01',[TransformasiController::class, 'createrotasi01']);
Route::get('/dilatasi01',[TransformasiController::class, 'dilatasi01']);
Route::get('/createdilatasi01',[TransformasiController::class, 'createdilatasi01']);
Route::get('/transgeo01',[TransformasiController::class, 'transgeo01']);
Route::get('/createtransgeo01',[TransformasiController::class, 'createtransgeo01']);
Route::get('/transgeo02',[TransformasiController::class, 'transgeo02']);
Route::get('/createtransgeo02',[TransformasiController::class, 'createtransgeo02']);


// 12 BARISAN DAN DERET
Route::get('/barisanaritmetika',[BarisanDanDeretController::class, 'barisanAritmetika']);
Route::get('/create_barisan_aritmetika',[BarisanDanDeretController::class, 'createbarisanAritmetika']);
Route::get('/barisangeometri',[BarisanDanDeretController::class, 'barisanGeometri']);
Route::get('/create_barisan_geometri',[BarisanDanDeretController::class, 'createbarisanGeometri']);
Route::get('/deretaritmetika',[BarisanDanDeretController::class, 'deretAritmetika']);
Route::get('/create_deret_aritmetika',[BarisanDanDeretController::class, 'createderetAritmetika']);
Route::get('/deretgeometri',[BarisanDanDeretController::class, 'deretGeometri']);
Route::get('/create_deret_geometri',[BarisanDanDeretController::class, 'createderetGeometri']);
Route::get('/takhingga01',[BarisanDanDeretController::class, 'takhingga01']);
Route::get('/createtakhingga01',[BarisanDanDeretController::class, 'createtakhingga01']);

// 13 LIMIT FUNGSI ALJABAR
Route::get('/limit01',[LimitController::class, 'limit01']);
Route::get('/createlimit01',[LimitController::class, 'createlimit01']);
Route::get('/limit02',[LimitController::class, 'limit02']);
Route::get('/createlimit02',[LimitController::class, 'createlimit02']);

// 14 LIMIT FUNGSI ALJABAR
Route::get('/turunan01',[TurunanController::class, 'turunan01']);
Route::get('/createturunan01',[TurunanController::class, 'createturunan01']);
Route::get('/turunan02',[TurunanController::class, 'turunan02']);
Route::get('/createturunan02',[TurunanController::class, 'createturunan02']);

// 36PELUANG
Route::get('/peluang01',[PeluangController::class, 'peluang01']);
Route::get('/createpeluang01',[PeluangController::class, 'createpeluang01']);
