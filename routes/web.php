<?php
//use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelModelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HobiModelController;
use App\Http\Controllers\KeluargaModelController;
use App\Http\Controllers\MahasiswaMatakuliahController;
use App\Http\Controllers\MahasiswaModelController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MatkulModelController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "2141720100-Adinda Kurnia Rifanti";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID {id}";
// });



// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

//Halaman product
Route::prefix('products')->group(function () { //untuk meringkas penulisan route menggunakan prefix
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/marbel-edu-games', function () {
        return "Marbel Edu Game";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "Marbel And Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        return "Riri Story Books";
    });
    Route::get('/kolak-kids-song', function () {
        return "Kolak Kids Song";
    });
});

//Halaman News

//Halaman Program
Route::prefix('program')->group(function () { //untuk meringkas penulisan route menggunakan prefix
    Route::get(
        '/',
        [ProgramController::class, 'index']
    );
    Route::get('/karir', function () {
        return "Program Karir";
    });
    Route::get('/magang', function () {
        return "Program Magang";
    });
    Route::get('/KunjunganIndustri', function () {
        return "Program Kunjungan Industri";
    });
});

//Halaman About Us
Route::get("/AboutUs", [AboutUsController::class, 'index']);

//Halaman Contact Us
Route::get("/ContactUs", [ContactUsController::class, 'index']);

//Route ArtikelModelController


//praktikum 6 auth
Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);

// Route::get('/tes', function () {
//     echo Hash::make('1') . '<br>';
//     echo Hash::make('1') . '<br>';
//     echo Hash::make('1') . '<br>';
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get("/AboutUs", [AboutUsController::class, 'index']);
    Route::get("/ContactUs", [ContactUsController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman');
    Route::get('/artikel', [ArtikelModelController::class, 'index'])->name('artikel');

    Route::resource('/hobi', HobiModelController::class);
    Route::resource('/keluarga', KeluargaModelController::class);
    Route::resource('/matkul', MatkulModelController::class);
    Route::resource('/matakuliah', MataKuliahController::class);
    Route::resource('/mahasiswa', MahasiswaModelController::class);
    Route::post('/mahasiswa/data', [MahasiswaModelController::class, 'data']);
    Route::resource('/mahasiswamatakuliah', MahasiswaMatakuliahController::class);
    Route::resource('/articles', ArticleController::class);
    Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
    Route::get('/nilai_pdf/{id}', [MahasiswaModelController::class, 'cetak_pdf'])->name('cetak');
});
