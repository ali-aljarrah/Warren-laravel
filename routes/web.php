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

Route::get('/scheduling', function () {
    return view('scheduling');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/patient-education', function () {
    return view('patient-education');
});

Route::get('/digital-impressions', function () {
    return view('digital-impressions');
});

Route::get('/intraoral-camera', function () {
    return view('intraoral-camera');
});

Route::get('/laser-dentistry', function () {
    return view('laser-dentistry');
});

Route::get('/local-anesthesia', function () {
    return view('local-anesthesia');
});

Route::get('/oral-cancer-screening', function () {
    return view('oral-cancer-screening');
});

Route::get('/oral-cancer-screening', function () {
    return view('oral-cancer-screening');
});

Route::get('/soft-tissue-laser-dentistry', function () {
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
