<?php


use App\Http\Controllers\Admin\AyarController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KitapController;
use App\Http\Controllers\Admin\MesajController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\Admin\UserController as Users;

Route::get('/', function () {
    return view('/home');
});

//User
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');

});

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('/home', [Home::class, 'index'])->name('homepage');
Route::get('/hakkimizda', [Home::class, 'aboutus'])->name('hakkimizda');
Route::get('/referanslar', [Home::class, 'references'])->name('referanslar');
Route::get('/sss', [Home::class, 'faq'])->name('sss');
Route::get('/iletisim', [Home::class, 'contact'])->name('iletisim');
Route::post('/mesajgonder', [Home::class, 'sendmessage'])->name('mesajgonder');
Route::get('/kitap/{id}/{slug}', [Home::class, 'kitap'])->name('kitap');
Route::get('/kitapkategorileri/{id}', [Home::class, 'kitapkategorileri'])->name('kitapkategorileri');
//Route::get('/sepetekle/{id}', [Home::class, 'index'])->whreNumber(parametre:'id')->name('sepetekle');


#Sepet
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::prefix('sepet')->group(function () {
        // Route assigned name "admin.users"...
        Route::get('/', [SepetController::class, 'index'])->name('user_sepet');
        Route::post('ekle/{id}', [SepetController::class, 'store'])->name('user_sepet_ekle');
        Route::post('guncelle/{id}', [SepetController::class, 'update'])->name('user_sepet_guncelle');
        Route::get('sil/{id}', [SepetController::class, 'destroy'])->name('user_sepet_sil');
    });

    #Siparis
    Route::prefix('siparis')->group(function () {
        // Route assigned name "admin.users"...
        Route::get('/', [SiparisController::class, 'index'])->name('user_siparisler');

        Route::post('ekle', [SiparisController::class, 'create'])->name('user_siparis_ekle');

        Route::post('kaydet', [SiparisController::class, 'store'])->name('user_siparis_kaydet');

        Route::get('duzenle/{id}', [SiparisController::class, 'edit'])->name('user_siparis_duzenle');
        Route::post('guncelle/{id}', [SiparisController::class, 'update'])->name('user_siparis_guncelle');
        Route::get('sil/{id}', [SiparisController::class, 'destroy'])->name('user_siparis_sil');
        Route::get('goster/{id}', [SiparisController::class, 'show'])->name('user_siparis_goster');
    });
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
Route::middleware('auth')->group(callback: function () {

    #Admin role
    Route::middleware('admin')->group(function () {


        Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
# Kategori
        Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin_kategori');
        Route::get('/admin/kategori/ekle', [KategoriController::class, 'add'])->name('admin_kategori_ekle');
        Route::post('/admin/kategori/olustur', [KategoriController::class, 'create'])->name('admin_kategori_olustur');
        Route::get('/admin/kategori/duzenle/{id}', [KategoriController::class, 'edit'])->name('admin_kategori_duzenle');
        Route::post('/admin/kategori/guncelle/{id}', [KategoriController::class, 'update'])->name('admin_kategori_guncelle');
        Route::get('/admin/kategori/sil/{id}', [KategoriController::class, 'destroy'])->name('admin_kategori_sil');
        Route::get('/admin/kategori/goster', [KategoriController::class, 'show'])->name('admin_kategori_goster');


//Ürün
        Route::prefix('admin/kitap')->group(function () {
            // Route assigned name "admin.users"...
            Route::get('/', [KitapController::class, 'index'])->name('admin_kitap');
            Route::get('ekle', [KitapController::class, 'create'])->name('admin_kitap_ekle');
            Route::post('kaydet', [KitapController::class, 'store'])->name('admin_kitap_kaydet');
            Route::get('duzenle/{id}', [KitapController::class, 'edit'])->name('admin_kitap_duzenle');
            Route::post('guncelle/{id}f', [KitapController::class, 'update'])->name('admin_kitap_guncelle');
            Route::get('sil/{id}', [KitapController::class, 'destroy'])->name('admin_kitap_sil');
            Route::get('goster', [KitapController::class, 'show'])->name('admin_kitap_goster');
        });

        Route::prefix('admin/mesaj')->group(function () {
            // Route assigned name "admin.users"...
            Route::get('/', [MesajController::class, 'index'])->name('admin_mesaj');
            Route::get('duzenle/{id}', [MesajController::class, 'edit'])->name('admin_mesaj_duzenle');
            Route::post('guncelle/{id}', [MesajController::class, 'update'])->name('admin_mesaj_guncelle');
            Route::get('sil/{id}', [MesajController::class, 'destroy'])->name('admin_mesaj_sil');
            Route::get('goster', [MesajController::class, 'show'])->name('admin_mesaj_goster');
        });

        Route::prefix('admin/resim')->group(function () {
            Route::get('ekle/{kitap_id}', [ImageController::class, 'create'])->name('admin_resim_ekle');
            Route::post('kaydet/{kitap_id}', [ImageController::class, 'store'])->name('admin_resim_kaydet');
            Route::get('sil/{id}/{kitap_id}', [ImageController::class, 'destroy'])->name('admin_resim_sil');
            Route::get('goster', [ImageController::class, 'show'])->name('admin_resim_goster');
        });

        Route::prefix('admin/user')->group(function () {
            // Route assigned name "admin.users"...
            Route::get('/', [Users::class, 'index'])->name('admin_users');
            Route::post('ekle', [Users::class, 'create'])->name('admin_user_ekle');
            Route::post('kaydet', [Users::class, 'store'])->name('admin_user_kaydet');
            Route::get('duzenle/{id}', [Users::class, 'edit'])->name('admin_user_duzenle');
            Route::post('guncelle/{id}', [Users::class, 'update'])->name('admin_user_guncelle');
            Route::get('sil/{id}', [Users::class, 'destroy'])->name('admin_user_sil');
            Route::get('goster/{id}', [Users::class, 'show'])->name('admin_user_goster');
            Route::get('userrol/{id}', [Users::class, 'user_roller'])->name('admin_user_roller');
            Route::post('userrolkaydet/{id}', [Users::class, 'user_role_store'])->name('admin_user_rol_ekle');
            Route::get('userrolsil/{userid}/{rolid}', [Users::class, 'user_role_delete'])->name('admin_user_rol_sil');
        });

        // Ayar
        Route::get('admin/ayar', [AyarController::class, 'index'])->name('admin_ayar');
        Route::post('admin/ayar/guncelle', [AyarController::class, 'update'])->name('admin_ayar_guncelle');
        # Ayar

    });
});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


//Test
Route::get('home/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');


