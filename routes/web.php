<?php
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ChoferController;
use App\Http\Controllers\BusController;
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
    return view('index');
});

Route::get('/usuario-pasajero/home', function () {
    return view('usuario-pasajero.homePasajero');
});

Route::get('/home', function () {
    return view('usuario-pasajero.homePasajero');
});

Route::get('/turnos', function () {
    return view('usuario-pasajero.turnos');
});

Route::get('/welcome', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users',UserController::class);
Route::resource('buses',BusController::class);
Route::resource('choferes',ChoferController::class);
Route::resource('turnos',TurnoController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::get('/qrcode', [QRCodeController::class, 'showQRCode']);

