<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;

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

// Common way
Route::get('/', [searchController::class, 'commonIndex']);
Route::post('/', [searchController::class, 'commonSearch'])->name('common');
Route::get('user/{user}', [searchController::class, 'commonFindUSerById'])->name('commonFindUser');

// SOLID way
Route::get('/newSearch', [searchController::class, 'shouldIndex']);
Route::post('/newSearch', [searchController::class, 'shouldSearch'])->name('should');
Route::get('/newUser/{user}', [searchController::class, 'shouldFindUSerById'])->name('shouldFindUser');
