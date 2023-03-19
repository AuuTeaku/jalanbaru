<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::resource('/', ViewController::class);
// Route::get('politik', 'App\Http\Controllers\ViewController@index1');
// Route::get('ekonomi', 'App\Http\Controllers\ViewController@index2');
// Route::get('sosial', 'App\Http\Controllers\ViewController@index3');
// Route::get('lingkungan', 'App\Http\Controllers\ViewController@index4');
// Route::get('pendidikan', 'App\Http\Controllers\ViewController@index5');
// Route::get('others', 'App\Http\Controllers\ViewController@index6');
// Route::resource('post', PostController::class);

// Route::get('/search', 'App\Http\Controllers\ViewController@search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
