<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentariosContac;
use App\Http\Controllers\UserSettingsController;


// Rutas de vistas

Route::view('/', 'OutSession')->name('OutSession');
Route::view('/Vcontacto', 'Vcontacto')->name('Vcontacto');
Route::view('/Perfil', 'Perfil')->name('Perfil')->middleware('auth');


// Rutas y controladores

//Este controlador sirve para almacenar los datos del form de comentarios los almacena en una variable llamada $msg
Route::post('Vcontacto', [App\Http\Controllers\ComentariosContac::class, 'store']);

Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [UserSettingsController::class,'changePassword'])->name('changePassword');
Route::delete('/destroy',  [UserSettingsController::class,'destroy'])->name('destroy');


Route::resource('/Citas', \App\Http\Controllers\CitaController::class)->middleware('auth');
Route::resource('/recetas', \App\Http\Controllers\RecetaController::class)->middleware('auth');
Route::resource('/medicamento', \App\Http\Controllers\MedicamentoController::class)->middleware('auth');
// fin Rutas 




Auth::routes();


