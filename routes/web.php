<?php

use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservaController;
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

Route::get('/boletos', function () {
    return view('usuario-pasajero.boletos');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('buses', BusController::class)->names('admin.buses');
Route::resource('choferes', ChoferController::class)->names('admin.choferes');
Route::resource('turnos', TurnoController::class)->names('admin.turnos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

Route::get('/qrcode', [QRCodeController::class, 'showQRCode']);


Route::get('/formulario-reserva', [ReservaController::class, 'mostrarFormulario'])->name('formulario_reserva');
Route::post('/guardar-reserva', [ReservaController::class, 'guardarReserva'])->name('guardar_reserva');
Route::get('/reserva/{idReserva}', [ReservaController::class, 'mostrarReserva'])->name('mostrar_reserva');

//Route::get('/escanear-qr/{codigoQR}', [ReservaController::class, 'escanearQR'])->name('escanear_qr');



Route::put('/admin/users/{user}/updateRole', [UserController::class, 'updateRole'])->name('admin.users.updateRole');
