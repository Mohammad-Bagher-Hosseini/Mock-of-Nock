<?php

use App\Http\Controllers\CRUDcontrollers\CreateController;
use App\Http\Controllers\CRUDcontrollers\DeleteController;
use App\Http\Controllers\CRUDcontrollers\ShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->name('home')->get('/', [HomeController::class, 'get_home']);
Route::prefix('/admin')->middleware(['auth', 'role:Admin'])->name('admin.')->group(function(){
    Route::prefix('/create')->name('create.')->group(function () {

        Route::get('/AP', [HomeController::class, 'get_create_AP'])->name('get_AP');
        Route::post('/AP', [CreateController::class, 'create_AP'])->name('post_AP');

        Route::get('/Point', [HomeController::class, 'get_create_Point'])->name('get_Point');
        Route::post('/Point', [CreateController::class, 'create_Point'])->name('post_Point');

        Route::get('/Pop', [HomeController::class, 'get_create_Pop'])->name('get_Pop');
        Route::post('/Pop', [CreateController::class, 'create_Pop'])->name('post_Pop');

        Route::get('/Link', [HomeController::class, 'get_create_Link'])->name('get_Link');
        Route::post('/Link', [CreateController::class, 'create_Link'])->name('post_Link');

    });

    Route::prefix('/delete')->name('delete.')->group(function () {
        Route::delete('/AP/{ap}', [DeleteController::class, 'delete_AP'])->name('AP');
        Route::delete('/Pop/{pop}', [DeleteController::class, 'delete_Pop'])->name('Pop');
        Route::delete('/Point/{point}', [DeleteController::class, 'delete_Point'])->name('Point');
        Route::delete('/Link/{link}', [DeleteController::class, 'delete_Link'])->name('Link');
    });

    Route::prefix('/edit')->name('edit.')->group(function () {
        Route::get('/AP', [HomeController::class, 'get_edit_AP'])->name('get_AP');
        Route::post('/AP', [EditController::class, 'edit_AP'])->name('post_AP');

        Route::get('/Point', [HomeController::class, 'get_edit_Point'])->name('get_Point');
        Route::post('/Point', [EditController::class, 'edit_Point'])->name('post_Point');

        Route::get('/Pop', [HomeController::class, 'get_edit_Pop'])->name('get_Pop');
        Route::post('/Pop', [EditController::class, 'edit_Pop'])->name('post_Pop');

        Route::get('/Link', [HomeController::class, 'get_edit_Link'])->name('get_Link');
        Route::post('/Link', [EditController::class, 'edit_Link'])->name('post_Link');
    });

});

Route::prefix('/show')->name('show.')->group(function () {
    Route::get('/AP', [ShowController::class, 'show_AP'])->name('AP');
    Route::get('/Point', [ShowController::class, 'show_Point'])->name('Point');
    Route::get('/Pop', [ShowController::class, 'show_Pop'])->name('Pop');
    Route::get('/Link', [ShowController::class, 'show_Link'])->name('Link');
});

require __DIR__.'/auth.php';
