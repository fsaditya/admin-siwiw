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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/d3akun', [App\Http\Controllers\HomeController::class, 'Akuntansitiga'])->name('3akuntansi');
Route::get('/d3akunap', [App\Http\Controllers\HomeController::class, 'AkuntansitigaAP'])->name('3akuntansiap');
Route::get('/d4akun', [App\Http\Controllers\HomeController::class, 'Akuntansiempat'])->name('4akuntansi');
Route::get('/d4akunapnon', [App\Http\Controllers\HomeController::class, 'AkuntansiempatAPNon'])->name('4akuntansiapnon');
Route::get('/d4akunap', [App\Http\Controllers\HomeController::class, 'AkuntansiempatAP'])->name('4akuntansiap');


Route::get('/d3pajak', [App\Http\Controllers\HomeController::class, 'Pajaktiga'])->name('3pajak');
Route::get('/d3pajakap', [App\Http\Controllers\HomeController::class, 'PajaktigaAP'])->name('3pajakap');
Route::get('/d3pbb', [App\Http\Controllers\HomeController::class, 'Pbbtiga'])->name('3pbb');
Route::get('/d3pbbap18', [App\Http\Controllers\HomeController::class, 'PbbtigaAP18'])->name('3pbbap18');
Route::get('/d3pbbap19', [App\Http\Controllers\HomeController::class, 'PbbtigaAP19'])->name('3pbbap19');

Route::get('/d3bc', [App\Http\Controllers\HomeController::class, 'Beacukaitiga'])->name('3beacukai');
Route::get('/d3bcap', [App\Http\Controllers\HomeController::class, 'BeacukaitigaAP'])->name('3beacukaiap');

Route::get('/d3kbn', [App\Http\Controllers\HomeController::class, 'Kbntiga'])->name('3kbn');
Route::get('/d3kbnap', [App\Http\Controllers\HomeController::class, 'KbntigaAP'])->name('3kbnap');
Route::get('/d3manset', [App\Http\Controllers\HomeController::class, 'Mansettiga'])->name('3manset');

//Today
Route::get('/today', [App\Http\Controllers\HomeController::class, 'today'])->name('Rekap');
Route::get('/today/d3akun', [App\Http\Controllers\HomeController::class, 'Akuntansitiganow'])->name('3akuntansinow');
Route::get('/today/d3akunap', [App\Http\Controllers\HomeController::class, 'AkuntansitigaAPnow'])->name('3akuntansiapnow');
Route::get('/today/d4akun', [App\Http\Controllers\HomeController::class, 'Akuntansiempatnow'])->name('4akuntansinow');
Route::get('/today/d4akunapnon', [App\Http\Controllers\HomeController::class, 'AkuntansiempatAPNonnow'])->name('4akuntansiapnonnow');
Route::get('/today/d4akunap', [App\Http\Controllers\HomeController::class, 'AkuntansiempatAPnow'])->name('4akuntansiapnow');
Route::get('/today/d3pajak', [App\Http\Controllers\HomeController::class, 'Pajaktiganow'])->name('3pajaknow');
Route::get('/today/d3pajakap', [App\Http\Controllers\HomeController::class, 'PajaktigaAPnow'])->name('3pajakapnow');
Route::get('/today/d3pbb', [App\Http\Controllers\HomeController::class, 'Pbbtiganow'])->name('3pbbnow');
Route::get('/today/d3pbbap18', [App\Http\Controllers\HomeController::class, 'PbbtigaAP18now'])->name('3pbbap18now');
Route::get('/today/d3pbbap19', [App\Http\Controllers\HomeController::class, 'PbbtigaAP19now'])->name('3pbbap19now');
Route::get('/today/d3bc', [App\Http\Controllers\HomeController::class, 'Beacukaitiganow'])->name('3beacukainow');
Route::get('/today/d3bcap', [App\Http\Controllers\HomeController::class, 'BeacukaitigaAPnow'])->name('3beacukaiapnow');
Route::get('/today/d3kbn', [App\Http\Controllers\HomeController::class, 'Kbntiganow'])->name('3kbnnow');
Route::get('/today/d3kbnap', [App\Http\Controllers\HomeController::class, 'KbntigaAPnow'])->name('3kbnapnow');
Route::get('/today/d3manset', [App\Http\Controllers\HomeController::class, 'Mansettiganow'])->name('3mansetnow');

//Togaa
Route::get('/rekaptoga', [App\Http\Controllers\TogaController::class, 'rekap'])->name('Rekap');
Route::get('/toga/d3akun', [App\Http\Controllers\TogaController::class, 'Akuntansitiga'])->name('3akuntansi');
Route::get('/toga/d3akunap', [App\Http\Controllers\TogaController::class, 'AkuntansitigaAP'])->name('3akuntansiap');
Route::get('/toga/d4akun', [App\Http\Controllers\TogaController::class, 'Akuntansiempat'])->name('4akuntansi');
Route::get('/toga/d4akunapnon', [App\Http\Controllers\TogaController::class, 'AkuntansiempatAPNon'])->name('4akuntansiapnon');
Route::get('/toga/d4akunap', [App\Http\Controllers\TogaController::class, 'AkuntansiempatAP'])->name('4akuntansiap');
Route::get('/toga/d3pajak', [App\Http\Controllers\TogaController::class, 'Pajaktiga'])->name('3pajak');
Route::get('/toga/d3pajakap', [App\Http\Controllers\TogaController::class, 'PajaktigaAP'])->name('3pajakap');
Route::get('/toga/d3pbb', [App\Http\Controllers\TogaController::class, 'Pbbtiga'])->name('3pbb');
Route::get('/toga/d3pbbap18', [App\Http\Controllers\TogaController::class, 'PbbtigaAP18'])->name('3pbbap18');
Route::get('/toga/d3pbbap19', [App\Http\Controllers\TogaController::class, 'PbbtigaAP19'])->name('3pbbap19');
Route::get('/toga/d3bc', [App\Http\Controllers\TogaController::class, 'Beacukaitiga'])->name('3beacukai');
Route::get('/toga/d3bcap', [App\Http\Controllers\TogaController::class, 'BeacukaitigaAP'])->name('3beacukaiap');
Route::get('/toga/d3kbn', [App\Http\Controllers\TogaController::class, 'Kbntiga'])->name('3kbn');
Route::get('/toga/d3kbnap', [App\Http\Controllers\TogaController::class, 'KbntigaAP'])->name('3kbnap');
Route::get('/toga/d3manset', [App\Http\Controllers\TogaController::class, 'Mansettiga'])->name('3manset');


//users
Route::get('/users/d3akun', [App\Http\Controllers\UsersController::class, 'Akuntansitiga'])->name('3akuntansi');
Route::get('/users/d3akunap', [App\Http\Controllers\UsersController::class, 'AkuntansitigaAP'])->name('3akuntansiap');
Route::get('/users/d4akun', [App\Http\Controllers\UsersController::class, 'Akuntansiempat'])->name('4akuntansi');
Route::get('/users/d4akunapnon', [App\Http\Controllers\UsersController::class, 'AkuntansiempatAPNon'])->name('4akuntansiapnon');
Route::get('/users/d4akunap', [App\Http\Controllers\UsersController::class, 'AkuntansiempatAP'])->name('4akuntansiap');
Route::get('/users/d3pajak', [App\Http\Controllers\UsersController::class, 'Pajaktiga'])->name('3pajak');
Route::get('/users/d3pajakap', [App\Http\Controllers\UsersController::class, 'PajaktigaAP'])->name('3pajakap');
Route::get('/users/d3pbb', [App\Http\Controllers\UsersController::class, 'Pbbtiga'])->name('3pbb');
Route::get('/users/d3pbbap18', [App\Http\Controllers\UsersController::class, 'PbbtigaAP18'])->name('3pbbap18');
Route::get('/users/d3pbbap19', [App\Http\Controllers\UsersController::class, 'PbbtigaAP19'])->name('3pbbap19');
Route::get('/users/d3bc', [App\Http\Controllers\UsersController::class, 'Beacukaitiga'])->name('3beacukai');
Route::get('/users/d3bcap', [App\Http\Controllers\UsersController::class, 'BeacukaitigaAP'])->name('3beacukaiap');
Route::get('/users/d3kbn', [App\Http\Controllers\UsersController::class, 'Kbntiga'])->name('3kbn');
Route::get('/users/d3kbnap', [App\Http\Controllers\UsersController::class, 'KbntigaAP'])->name('3kbnap');
Route::get('/users/d3manset', [App\Http\Controllers\UsersController::class, 'Mansettiga'])->name('3manset');
Route::get('/delete/{npmusers}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('delete');


Route::get('/rekap', [App\Http\Controllers\HomeController::class, 'Rekap'])->name('Rekap');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/delete/{idmahasiswa}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('delete');


