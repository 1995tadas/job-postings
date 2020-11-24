<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PostingController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('jobs')->name('jobs.')->group(function () {
    Route::view('create', 'jobs.create')->name('create');
    Route::post('/', [PostingController::class, 'store'])->name('store');
});
Route::get('change',[LocaleController::class, 'change'])->name('locale.change');

