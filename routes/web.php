<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);
Route::get("/users",[AdminController::class,"user"]);
Route::get("/userdelete/{id}",[AdminController::class,"deleteuser"]);
Route::get("/foodmenu",[AdminController::class,"foods"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);
Route::get("/updateview/{id}",[AdminController::class,"updateview"]);
Route::get("/foodmenu/{id}",[AdminController::class,"menu"]);
Route::post("/updatedata/{id}",[AdminController::class,"update"]);
Route::post("/reservation",[AdminController::class,"reservation"]);
Route::get("/viewreservation",[AdminController::class,"viewreservation"]);
Route::get("/viewfoodchefs",[AdminController::class,"viewfoodchefs"]);
Route::post("/foodchef",[AdminController::class,"foodchef"]);
Route::get("/chefdelete/{id}",[AdminController::class,"chefdelete"]);
Route::get("/chefview/{id}",[AdminController::class,"chefview"]);
Route::post("/updatechef/{id}",[AdminController::class,"updatechef"]); 



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
