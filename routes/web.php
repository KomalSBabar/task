<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Tasks;
use App\Http\Controllers\StripePaymentController;


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
    return view('login');
});




Route::resource('companies', CompaniesController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('tasks', Tasks::class);

Route::get('stripe',[StripePaymentController::class,'paymentStripe'])->name('addmoney.paymentstripe');
Route::post('add-money-stripe',[StripePaymentController::class,'postPaymentStripe'])->name('addmoney.stripe');