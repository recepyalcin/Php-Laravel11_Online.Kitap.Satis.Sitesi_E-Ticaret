<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', function () {
 return view('/home');
});

Route::get('/home', function () {
    return view('\front\home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Admin

//Route::middleware('auth')->prefix('admin')->group(function () {
//
//    #Admin role
//    Route::middleware('admin')->group(function () {
//
//        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
//        # Kategori
//        Route::get('kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('admin_kategori');
//        Route::get('kategori/ekle', [App\Http\Controllers\Admin\KategoriController::class, 'add'])->name('admin_kategori_ekle');
//        Route::post('kategori/olustur', [App\Http\Controllers\Admin\KategoriController::class, 'create'])->name('admin_kategori_olustur');
//        Route::get('kategori/duzenle/{id}', [App\Http\Controllers\Admin\KategoriController::class, 'edit'])->name('admin_kategori_duzenle');
//        Route::post('kategori/guncelle/{id}', [App\Http\Controllers\Admin\KategoriController::class, 'update'])->name('admin_kategori_guncelle');
//        Route::get('kategori/sil/{id}', [App\Http\Controllers\Admin\KategoriController::class, 'destroy'])->name('admin_kategori_sil');
//        Route::get('kategori/goster', [App\Http\Controllers\Admin\KategoriController::class, 'show'])->name('admin_kategori_goster');
//    }); # admin
//}); #auth

//Admin

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
# Kategori
Route::get('/admin/kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('admin_kategori');
Route::get('/admin/kategori/ekle', [App\Http\Controllers\Admin\KategoriController::class, 'add'])->name('admin_kategori_ekle');
Route::post('/admin/kategori/olustur', [App\Http\Controllers\Admin\KategoriController::class, 'create'])->name('admin_kategori_olustur');
Route::get('/admin/kategori/duzenle/{id}', [App\Http\Controllers\Admin\KategoriController::class, 'edit'])->name('admin_kategori_duzenle');
Route::post('/admin/kategori/guncelle/{id}', [App\Http\Controllers\Admin\KategoriController::class, 'update'])->name('admin_kategori_guncelle');
Route::get('/admin/kategori/sil/{id}', [App\Http\Controllers\Admin\KategoriController::class, 'destroy'])->name('admin_kategori_sil');
Route::get('/admin/kategori/goster', [App\Http\Controllers\Admin\KategoriController::class, 'show'])->name('admin_kategori_goster');
# admin

//Ürün
Route::prefix('admin/kitap')->group(function () {
    // Route assigned name "admin.users"...
    Route::get('/', [\App\Http\Controllers\Admin\KitapController::class, 'index'])->name('admin_kitap');
    Route::get('ekle', [\App\Http\Controllers\Admin\KitapController::class, 'create'])->name('admin_kitap_ekle');
    Route::post('kaydet', [\App\Http\Controllers\Admin\KitapController::class, 'store'])->name('admin_kitap_kaydet');
    Route::get('duzenle/{id}', [\App\Http\Controllers\Admin\KitapController::class, 'edit'])->name('admin_kitap_duzenle');
    Route::post('guncelle/{id}f', [\App\Http\Controllers\Admin\KitapController::class, 'update'])->name('admin_kitap_guncelle');
    Route::get('sil/{id}', [\App\Http\Controllers\Admin\KitapController::class, 'destroy'])->name('admin_kitap_sil');
    Route::get('goster', [\App\Http\Controllers\Admin\KitapController::class, 'show'])->name('admin_kitap_goster');
});

Route::prefix('admin/resim')->group(function () {
    Route::get('ekle/{kitap_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_resim_ekle');
    Route::post('kaydet/{kitap_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_resim_kaydet');
    Route::get('sil/{id}/{kitap_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_resim_sil');
    Route::get('goster', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_resim_goster');
});
# Ürün
// Ayar
Route::get('admin/ayar', [\App\Http\Controllers\Admin\AyarController::class, 'index'])->name('admin_ayar');
Route::post('admin/ayar/guncelle', [\App\Http\Controllers\Admin\AyarController::class, 'update'])->name('admin_ayar_guncelle');
# Ayar

Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

//Test
Route::get('home/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');


