<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\DashController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;




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




//Category routes
Route::get('/category/show',[CategoryController::class,'show']);
Route::post('/category/add',[CategoryController::class,'store']);
Route::delete('/category/{id}',[CategoryController::class,'delete']);

Route::get('/category/edit/{id}',[CategoryController::class,'edit']);
Route::put('/category/{id}',[CategoryController::class,'update']);

Auth::routes();

Route::get('/dashboard',[DashController::class, 'index']);

//destination routes
Route::get('/destination/add',[DestinationController::class,'create']);
Route::post('/destination/add',[DestinationController::class,'store']);
Route::get('/destination/show',[DestinationController::class,'show']);


Route::get('/destination/edit/{id}',[DestinationController::class,'edit']);
Route::put('/destination/{id}',[DestinationController::class,'update']);
Route::delete('/destination/{id}',[DestinationController::class,'delete']);


//posts route
Route::resource('posts',PostController::class); 

//pages route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/destination',[PageController::class,'destination']);


//Contact and message route
Route::get('/contact',[PageController::class,'contact']);
Route::post('/contact/add',[ContactController::class,'store']);
Route::get('/contact/show',[ContactController::class,'show']);
Route::delete('/contact/{id}',[ContactController::class,'delete']);


Route::get('/inquiry/{id}',[DestinationController::class,'display']);
Route::post('/inquiry/{id}',[ContactController::class,'inquiryStore']);
Route::get('/inquiry',[ContactController::class,'inquiryShow']);
Route::delete('/inquiry/{id}',[ContactController::class,'inquiryDelete']);

//users show
Route::get('/users/show',[DashController::class,'userShow']);





