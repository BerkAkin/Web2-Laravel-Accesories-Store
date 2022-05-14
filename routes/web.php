<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\uyeOl;
use App\Http\Controllers\Urunlerilistele;
use App\Http\Controllers\Sepet;
use App\Http\Controllers\SiparisVer;
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
    return view('anasayfa');
});
Route::get('/',[Urunlerilistele::class,'goster']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::post('urunukaydet',[uyeOl::class,'urunKaydet']);
Route::get('sil/{urunid}',[uyeOl::class,'urunusil']);

Route::post('sepete-ekle',[Sepet::class,'ekle'])->name('sepete-ekle');;
Route::get('sepettensil/{id}', [Sepet::class,'kaldir'])->name('sepetten-kaldir');

Route::get('kullanicisil/{id}', [uyeOl::class,'kullanicisil'])->name('kullanici-kaldir');

Route::get('siparisonayla/{id}', [uyeOl::class,'siparisOnayla'])->name('siparis-onayla');

Route::get('sepet', function () {
    return view('sepet');
});

Route::get('siparisiver',[SiparisVer::class,'siparisi_tamamla']);