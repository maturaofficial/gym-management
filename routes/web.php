<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


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

Route::get('/', [MemberController::class, 'index'])->name('index');
Route::get('/addmember', [MemberController::class, 'addmember'])->name('addmember');
Route::post('/store', [MemberController::class, 'store'])->name('store');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/editmember/{id}', [MemberController::class, 'editmember'])->name('editmember');
Route::post('/updatemember/{id}', [MemberController::class, 'updatemember'])->name('updatemember');
Route::get('/destroy/{id}', [MemberController::class, 'destroy'])->name('destroy');
