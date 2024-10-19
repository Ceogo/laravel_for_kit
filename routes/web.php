<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\BillController;

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

Route::get('/', [WorkspaceController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('workspaces', WorkspaceController::class);
Route::resource('api_tokens', ApiTokenController::class)->except(['index', 'create', 'store']);

Route::get('workspaces/{workspace}/api_tokens', [ApiTokenController::class, 'index'])->name('api_tokens.index');
Route::post('workspaces/{workspace}/api_tokens', [ApiTokenController::class, 'store'])->name('api_tokens.store');
Route::get('workspaces/{workspace}/api_tokens/create', [ApiTokenController::class, 'create'])->name('api_tokens.create');

Route::get('workspaces/{workspace}/bills', [BillController::class, 'index'])->name('bills.index');

