<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\New_crud_c\CustomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ******Normal Crud*******
// Route::get('/', [StudentController::class, 'index']);
// Route::post('/create', [StudentController::class, 'store']);
// Route::get('/read', [StudentController::class, 'readData']);
// Route::get('/edit/{id}', [StudentController::class, 'editData']);
// Route::post('/update/{id}', [StudentController::class, 'updateData']);
// Route::get('/delete/{id}', [StudentController::class, 'Delete']);

//******Multiple Dropdown AJAX********/
Route::get('/', [CustomerController::class, 'index']);
Route::post('/getState', [CustomerController::class, 'getState']);
Route::post('/getCity', [CustomerController::class, 'getCity']);
Route::post('/create', [CustomerController::class, 'dataStore']);
Route::post('/createAj', [CustomerController::class, 'dataStoreAj']);
Route::get('/read', [CustomerController::class, 'dataRead']);
Route::get('/readAj', [CustomerController::class, 'dataReadAj']);
Route::get('/editAj/{id}', [CustomerController::class, 'dataEditAj']);
Route::post('/updateAj/{id}', [CustomerController::class, 'dataUpdateAj']);
Route::get('/deleteAj/{id}', [CustomerController::class, 'dataDeleteAj']);