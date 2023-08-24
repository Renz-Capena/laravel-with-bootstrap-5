<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

// login li9nk
Route::get('/', function () { return view('login'); })->name('loginFn');

// register link
Route::get('/register', function () { return view('register'); })->name('registerFn');

// home link
Route::get("/home",function(){ return view('home'); })->name('homeFn');

// register user
Route::post("/createAccount",[PersonController::class,"createAccount"])->name('createAccountFn');

// validate user
Route::post("/loginValidate",[PersonController::class,"loginValidate"])->name('loginValidateFn');

// logout
Route::get("/logout",[PersonController::class,"logoutBtn"])->name('logoutBtnFn');

// fetch all data
Route::get("/getAllData",[PersonController::class,"getAllData"])->name("getAllDataFn");

// delete
Route::post("/delete",[PersonController::class,"delete"])->name("deleteFn");

// view
Route::get("/view/{id}",[PersonController::class,"viewUser"]);

// update user
Route::post("/updateUser",[PersonController::class,"updateUser"])->name("updateUserFn");