<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SettingsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Additional routes for pages not included in resources
Route::get('/bord/cards', [PagesController::class, 'cards'])->name('bord.cards');
Route::patch('/bord/update_cards/{id}', [PagesController::class, 'update_cards'])->name('bord.update_cards');

// Main Routes for "bord" inlcuded in resources
Route::resource('/bord', PagesController::class);

// Fallback Route, for when routes are called but not defined
Route::fallback(FallbackController::class);
