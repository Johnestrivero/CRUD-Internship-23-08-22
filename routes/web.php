<?php

use App\Http\Controllers\CRUDController;
use GuzzleHttp\Psr7\Request;
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


Route::view('/','home')->name('Home');
Route::any("create",[CRUDController::class, "Create"])->name('Create');
Route::any("edit",[CRUDController::class, "Edit"])->name('Edit');
Route::any("update",[CRUDController::class, "Update"])->name('Update');
Route::any("delete",[CRUDController::class, "Delete"])->name('Delete');
Route::any("store",[CRUDController::class, "Store"])->name('Store');
Route::any("show",[CRUDController::class, "Show"])->name('Show');