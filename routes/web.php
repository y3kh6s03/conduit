<?php

use App\Http\Controllers\ConduitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ConduitController::class, 'index'])->name('index');

require __DIR__.'/auth.php';

Route::prefix('/')
->controller(ConduitController::class)
->name('conduit.')
->group(function(){
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{postId}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}', 'update')->name('update');
});

