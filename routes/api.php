<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamaaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/chamaa/create', [ChamaaController::class, 'CreateChamaa'])->name('chamaa.create');
Route::get('/chamaa/list', [ChamaaController::class,'ListChamaa'])->name('chamaa.list');
Route::get('/users/list', [UserController::class,'getUserById'])->name('user.list');
Route::post('/users/createUser', [UserController::class,'createUser'])->name('user.create');
Route::delete('/users/delete', [UserController::class,'deleteUser'])->name('user.delete');
Route::put('/users/update', [UserController::class,'updateUser'])->name('user.update');
Route::delete('/users/deletebyid', [UserController::class,'deleteUserById'])->name('user.update');
Route::get('/users/all', [UserController::class,'getUsers'])->name('user.all');