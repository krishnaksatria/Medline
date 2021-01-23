<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'PageController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/queue/{id}', 'QueueController@view')->name('queueview')->middleware('MyMid');
Route::get('/take-queue', 'QueueController@takeQueue')->name('takeQueue')->middleware('MyMid');

Route::get('/medicine', 'PageController@viewMedicine')->name('viewMedicine');

Route::get('/hospital', 'PageController@viewHospital');
Route::get('/findhospital', 'PageController@search');
Route::get('/hospital/all', 'AllHospitalController@view');
Route::get('/hospital/{id}', 'PageController@hospitalDetail');

Route::get('/payment', 'PaymentController@view')->name('paymentView');
Route::post('/payment/submit/{id}', 'PaymentController@insert')->name('paymentInsert');

Route::get('/doctor/{id}', 'PageController@viewDoctorQueue');
Route::get('/getQueue/{id}', 'PageController@counting');

Route::get('/addcart/{id}', 'CartController@counting');
