<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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
//     return view('welcome');
// });


Route::get('/', [AgendaController::class, 'especialidades'])->name('agenda.especialidades');
Route::post('/especialistas', [AgendaController::class, 'especialistas'])->name('agenda.especialistas');
Route::post('/agendamento', [AgendaController::class, 'agendamento'])->name('agenda.agendamento');
Route::post('/agendamento/enviar', [AgendaController::class, 'store'])->name('agenda.store');


Route::get('/especialistas', function (Request $request) {
         dd($request);
     });