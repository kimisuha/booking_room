<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\user as ControllersUser;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [UserController::class, 'homepage_view']);
Route::group(['/' => '/'], function () {
    Route::post('book-room', [UserController::class, 'set_room']);
    Route::get('book-room', [UserController::class, 'BookRoomView']);

    Route::get('unset-room', [UserController::class, 'unset_room']);
    Route::get('get-the-bill', [UserController::class, 'get_the_bill']);

    Route::get('create-info', [UserController::class, 'CreateInfoView']);
    Route::post('create-info', [UserController::class, 'CreateInfo']);
    
    Route::get('remove-user', [UserController::class, 'RemoveUserView']);
    Route::post('remove-user', [UserController::class, 'RemoveUser']);
});

Route::get('/admin', [AdminController::class, 'adminView']);
Route::prefix('admin')->group(function(){
    Route::get('/set-room', [AdminController::class, 'SetRoomView']);
    Route::post('/set-room', [AdminController::class, 'SetRoom']);

    Route::get('/unset-room', [AdminController::class, 'UnsetRoomView']);
    Route::post('/unset-room', [AdminController::class, 'UnsetRoom']);

    Route::get('/get-bill', [AdminController::class, 'GetBillView']);
    Route::post('/get-bill', [AdminController::class, 'GetBill']);

    Route::get('/new-room', [AdminController::class, 'AddNewView']);
    Route::post('/new-room', [AdminController::class, 'AddNew']);

    Route::get('/status-room', [AdminController::class, 'StatusView']);
    Route::post('/status-room', [AdminController::class, 'Status']);

    Route::get('/delete-room', [AdminController::class, 'DelRoomView']);
    Route::post('/delete-room', [AdminController::class, 'DelRoom']);

    Route::get('/delete-user', [AdminController::class, 'DelUserView']);
    Route::post('/delete-user', [AdminController::class, 'DelUser']);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Route::post('/normal-form', [UserController::class, 'CreateInfo']);
//Route::get('/normal-form', [UserController::class, 'PostView']);

