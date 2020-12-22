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
    return view('index');
});

Route::prefix('staff')->group(function(){
    Auth::routes();
    Route::get('/patient', 'PatientController@index')->name('patient.index');
    Route::post('/patient', 'Patientcontroller@create')->name('patient.create');
    Route::get('/patient/all',"Patientcontroller@all")->name('patient.all');
    Route::get('/patient/allapi',"Patientcontroller@allapi")->name('patient.allapi');
    Route::get('/doctor', 'Physiciancontroller@create')->name('physician.create');
    Route::post('/doctor', 'Physiciancontroller@store')->name('physician.store');
    Route::get('/doctor/all',"Physiciancontroller@all")->name('physician.all');
    Route::get('/doctor/allapi',"Physiciancontroller@allapi")->name('physician.allapi');
    Route::get('/medication', 'Medicationcontroller@create')->name('medication.create');
    Route::post('/medication', 'Medicationcontroller@store')->name('medication.store');
    Route::get('/manage','Appointmentcontroller@manage')->name('appointment.manage');
    Route::get('/manage/{id}', 'Appointmentcontroller@single')->name('appointment.single');
    Route::get('/logout', 'Homecontroller@destroy')->name('home.logout');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/book', 'Appointmentcontroller@index')->name('appointment.index');
Route::get('/dashboard', 'Appointmentcontroller@show')->name('appointment.show')->middleware('patient.authenticate');
Route::post('/schedule', "Appointmentcontroller@store")->name('appointment.store')->middleware('patient.authenticate');
Route::get('/logout', 'Appointmentcontroller@destroy')->name('appointment.logout');


