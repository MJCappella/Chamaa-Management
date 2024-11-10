<?php

use App\Http\Controllers\ContributionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamaaController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\InstallmentController;

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

// expense routes
Route::get('/expenses/all', [ExpenseController::class, 'ListExpenses'])->name('expenses.all');
Route::post('/expenses/create', [ExpenseController::class, 'CreateExpense'])->name('expenses.create');
Route::get('/expenses/view/{id}', [ExpenseController::class, 'ViewExpense'])->name('expenses.view');
Route::put('/expenses/update/{id}', [ExpenseController::class, 'UpdateExpense'])->name('expenses.update');
Route::delete('/expenses/delete/{id}', [ExpenseController::class, 'DeleteExpense'])->name('expenses.delete');

//installments routes
Route::post('/installments/make', [InstallmentController::class, 'makeInstallment'])->name('installments.make');
Route::get('/installments/all', [InstallmentController::class, 'getAllInstallments'])->name('installments.all');
Route::get('/installments/user/{user_id}', [InstallmentController::class, 'getInstallmentsByUserId'])->name('installments.user');
Route::get('/installments/loan/{loan_id}', [InstallmentController::class, 'getInstallmentsByLoanId'])->name('installments.loan');



Route::get('/users/list', [UserController::class,'getUserById'])->name('user.list');
Route::post('/users/createUser', [UserController::class,'createUser'])->name('user.create');
Route::delete('/users/delete', [UserController::class,'deleteUser'])->name('user.delete');
Route::put('/users/update', [UserController::class,'updateUser'])->name('user.update');
Route::delete('/users/deletebyid', [UserController::class,'deleteUserById'])->name('user.update');
Route::get('/users/all', [UserController::class,'getUsers'])->name('user.all');

Route::post('/contribution/new', [ContributionController::class,'makeContribution'])->name('contribution.new');
Route::put('/contribution/update', [ContributionController::class,'updateContribution'])->name('contribution.update');
Route::get('/contribution/all', [ContributionController::class,'getContributions'])->name('contribution.get');