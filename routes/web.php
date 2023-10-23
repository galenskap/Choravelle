<?php

use App\Http\Controllers\PrivatespaceController;
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

// Pages publiques
Route::get('/', function ($slug = '/') {
    return App::call('App\Http\Controllers\PageController@index', ['slug' => $slug]);
})->name('homepage');
Route::get('a-propos', function ($slug = 'a-propos') {
    return App::call('App\Http\Controllers\PageController@index', ['slug' => $slug]);
})->name('a-propos');

// Espace choristes
Route::get('/partotheque', [PrivatespaceController::class, 'partotheque'])->middleware(['auth', 'verified'])->name('partotheque');
Route::get('/trombinoscope', [PrivatespaceController::class, 'trombinoscope'])->middleware(['auth', 'verified'])->name('trombinoscope');

// Compte utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);

