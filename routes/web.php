<?php

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
})->middleware('auth');


Route::get('/instructors', 'InstructorsController@showAll')->middleware('auth');

Route::post('/instructors', 'InstructorsController@add')->middleware('auth');

Route::get('/deleteInstructor/{id}', 'InstructorsController@deleteUser')->middleware('auth');


Route::get('/clients', 'ClientController@showAll')->middleware('auth');

Route::post('/clients', 'ClientController@add')->middleware('auth');

Route::get('/deleteClient/{id}', 'ClientController@deleteUser')->middleware('auth');



Route::get('/scheduling/calendar', 'LessonsController@index')->middleware('auth');

Route::get('/schedule/day/{id}', 'LessonsController@show')->middleware('auth');

Route::post('/scheduling/calendar', 'LessonsController@add')->middleware('auth'); // this is new from brayden


Route::get('/reports/report', function () {
    return view('reports/report');
})->middleware('auth');

Route::post('/reports/payment', 'PaymentController@add');

Route::get('/reports/payment', 'PaymentController@showAll');

Route::get('/reports/availabilities', 'PaymentController@showAvailabilities');
Route::get('/deleteAvailability/{id}', 'PaymentController@deleteAvailability');
Route::post('/addAvailability', 'PaymentController@addAvailability');













Route::get('/reports/lessons', 'PaymentController@showLessons');
Route::get('/deleteLesson/{id}', 'PaymentController@deleteLesson');


Route::get('/payment', function () {
    return view('payment');
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
