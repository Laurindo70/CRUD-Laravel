<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\TestContoller;


Route::get('/', function () {
    return view('welcome');
});


//---------------GET---------------//
Route::get('usuarios', [TestContoller::class, 'listAllUsers'])->name('users.listAll');
Route::get('usuarios/novo', [TestContoller::class, 'formAddUser'])->name('users.formAddUser');
Route::get('usuarios/editar/{user}', [TestContoller::class, 'formEditUser'])->name('users.formEditUser');
Route::get('usuarios/{user}', [TestContoller::class, 'listUser'])->name('users.list');

//--------------POST----------------//
Route::post('usuarios/store', [TestContoller::class, 'storeUser'])->name('users.store');

//--------------PUT-------/////
Route::put('usuarios/edit/{user}', [TestContoller::class, 'edit'])->name('users.edit');

//--------------DELETE----------//
Route::delete('usuarios/destroy/{user}', [TestContoller::class, 'destroy'])->name('users.destroy');

