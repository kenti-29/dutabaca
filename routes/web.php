<?php

use App\Http\Controllers\Admin\AdministrasiController;
use App\Http\Controllers\Admin\BeritasController as AdminBeritasController;
use App\Http\Controllers\Admin\ProkerController as AdminProkerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagementUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Juri\DashboardController as JuriDashboardController;
use App\Http\Controllers\Juri\AdministrasiController as JuriAdministrasiController;
use App\Http\Controllers\Juri\TesTulisController as JuriTesTulisController;
use App\Http\Controllers\Juri\WawancaraController as JuriWawancaraController;
use App\Http\Controllers\Juri\TanyaJawabController as JuriTanyaJawabController;
use App\Http\Controllers\Juri\KarantinaController as JuriKarantinaController;
use App\Http\Controllers\Juri\SpeechController as JuriSpeechController;
use App\Http\Controllers\Juri\PesertaController as JuriPesertaController;
use App\Http\Controllers\Juri\ProfileController as JuriProfileController;
use App\Http\Controllers\Peserta\DashboardController as PesertaDashboardController;
use App\Http\Controllers\Peserta\AdministrasiController as PesertaAdministrasiController;
use App\Http\Controllers\Peserta\ProfileController as PesertaProfileController;
use App\Http\Controllers\Admin\BeritasController\BeritasController;
use App\Http\Controllers\Admin\BiodataController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ProfileController\ProfileController;
use App\Http\Controllers\Superadmin\DashboardController as SuperadminDashboardController;
use App\Http\Controllers\Superadmin\UserController as SuperadminUserController;
use App\Http\Controllers\Superadmin\PesertaController as SuperadminPesertaController;
use App\Http\Controllers\Superadmin\BeritaController as SuperadminBeritaController;
use App\Http\Controllers\Superadmin\ProfileController as SuperadminProfileController;
use App\Http\Controllers\TentangController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show');
Route::get('/tentang', [TentangController::class, 'index'])->name('index');
Route::get('/proker', [HomeController::class, 'proker'])->name('proker');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name ('proseslogin');
Route::get('/lupapassword', [AuthController::class, 'lupapassword'])->name('lupapassword');
Route::post('/lupapassword', [AuthController::class, 'postlupapassword'])->name('postlupapassword');


Route::middleware(['auth', 'checkrole:ADMIN'])->group(function() {
    Route::get('/dashboard-admin', [DashboardController::class, 'index']);
    Route::get('/management-user',
    [ManagementUser::class, 'gantiPassword'])
                ->name('management-user.ganti-password');
    Route::resource('/management-user', ManagementUserController::class);
    Route::post('/registrationadmin', [AuthController::class, 'registrationadmin'])->name('registrationadmin');
    Route::resource('/administrasis-peserta', AdministrasiController::class);
    Route::resource('/nilai-peserta', NilaiController::class);
    Route::resource('/beritas-admin', AdminBeritasController::class);
    Route::resource('/biodata-peserta', BiodataController::class);
    Route::resource('/proker-admin', AdminProkerController::class);
    Route::resource('/profile-admin', AdminProfileController::class);
});

Route::middleware(['auth', 'checkrole:KEPALADINAS'])->group(function() {
    Route::get('/dashboard-superadmin', [SuperadminDashboardController::class, 'index']);
    Route::get('/user-superadmin', [SuperadminUserController::class, 'index']);
    Route::get('/peserta-superadmin', [SuperadminPesertaController::class, 'index']);
    Route::get('/berita-superadmin', [SuperadminBeritaController::class, 'index']);
    Route::get('/laporanpendaftar-superadmin', [SuperadminPesertaController::class, 'laporanpendaftar']);
    Route::get('/laporanpeserta-superadmin', [SuperadminPesertaController::class, 'laporanpeserta']);
    Route::resource('/profile-superadmin', SuperadminProfileController::class);

});

Route::middleware(['auth', 'checkrole:JURI'])->group(function() {
    Route::get('/dashboard-juri', [JuriDashboardController::class, 'index']);
    Route::resource('/administrasi-juri', JuriAdministrasiController::class);
    Route::get('/peserta-juri', [JuriPesertaController::class, 'index']);
    Route::resource('/karantina-juri', JuriKarantinaController::class);
    Route::resource('/speech-juri', JuriSpeechController::class);
    Route::resource('/tanyajawab-juri', JuriTanyaJawabController::class);
    Route::resource('/testulis-juri', JuriTesTulisController::class);
    Route::resource('/wawancara-juri', JuriWawancaraController::class);
    Route::resource('/profile-juri', JuriProfileController::class);

});

Route::middleware(['auth', 'checkrole:PESERTA'])->group(function() {
    Route::get('/dashboard-peserta', [PesertaDashboardController::class, 'index']);
    Route::get('/hasilseleksi-peserta', [PesertaDashboardController::class, 'hasilseleksi']);
    Route::resource('/administrasi-peserta', PesertaAdministrasiController::class);
    Route::resource('/profile-peserta', PesertaProfileController::class);
    //Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
});

