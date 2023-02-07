<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PagesController;
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
    return redirect('bord');
});

require __DIR__ . '/auth.php';

// Main Routes for "bord" inlcuded in resources
Route::resource('/bord', PagesController::class, ['except' => ['show']]);

// Route for the fruit page
Route::get('/bord/fruit', [PagesController::class, 'fruit'])->name('bord.fruit');

// Routes for editing cards
Route::get('/bord/cards_air', [PagesController::class, 'cards_air'])->name('bord.cards_air');
Route::patch('/bord/update_air/{id}', [PagesController::class, 'update_air'])->name('bord.update_air');

Route::get('/bord/cards_fruit', [PagesController::class, 'cards_fruit'])->name('bord.cards_fruit');
Route::patch('/bord/update_fruit/{id}', [PagesController::class, 'update_fruit'])->name('bord.update_fruit');

// Route for showing air pages
Route::get('/bord/{id}', [PagesController::class, 'air'])->name('bord.air');


// Fallback Route, for when routes are called but not defined
Route::fallback(FallbackController::class);
