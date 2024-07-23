<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/patient-information', function () {
    return view('patient-information');
});

Route::get('/patient-information/scheduling', function () {
    return view('scheduling');
});

Route::get('/patient-information/offers', function () {
    return view('offers');
});

Route::get('/patient-information/patient-education', function () {
    return view('patient-education');
});

Route::get('/patient-information/patient-education/digital-panoramic-x-rays', function () {
    return view('digital-panoramic-x-rays');
});

Route::get('/patient-information/patient-education/dental-impressions', function () {
    return view('digital-impressions');
});

Route::get('/patient-information/patient-education/intraoral-camera', function () {
    return view('intraoral-camera');
});

Route::get('/patient-information/patient-education/laser-dentistry', function () {
    return view('laser-dentistry');
});

Route::get('/patient-information/patient-education/local-anesthesia', function () {
    return view('local-anesthesia');
});

Route::get('/patient-information/patient-education/oral-cancer-screening', function () {
    return view('oral-cancer-screening');
});

Route::get('/patient-information/patient-education/soft-tissue-laser-dentistry', function () {
    return view('soft-tissue-laser-dentistry');
});

Route::get('/dental-services', function () {
    return view('dental-services');
});

Route::get('/emergency-dentistry', function () {
    return view('emergency-dentistry');
});

Route::get('/general-dentist', function () {
    return view('general-dentist');
});

Route::get('/air-abrasion', function () {
    return view('air-abrasion');
});

Route::get('/dental-bridges', function () {
    return view('dental-bridges');
});

Route::get('/crowns', function () {
    return view('crowns');
});

Route::get('/dentures', function () {
    return view('dentures');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
