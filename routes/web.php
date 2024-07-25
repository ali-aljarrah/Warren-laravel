<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
})->name('home');

// Patient Information routes
Route::get('/patient-information', function () {
    return view('patient-information');
})->name('patient-information');

Route::get('/patient-information/scheduling', function () {
    return view('scheduling');
})->name('scheduling');

Route::get('/patient-information/patient-forms', function () {
    return view('patient-forms');
})->name('patient-forms');

Route::get('/patient-information/offers', function () {
    return view('offers');
})->name("offers");

// Patient Education routes
Route::get('/patient-information/patient-education', function () {
    return view('patient-education');
})->name("patient-education");

Route::get('/patient-information/patient-education/digital-panoramic-x-rays', function () {
    return view('digital-panoramic-x-rays');
})->name("digital-panoramic-x-rays");

Route::get('/patient-information/patient-education/dental-impressions', function () {
    return view('digital-impressions');
})->name("dental-impressions");

Route::get('/patient-information/patient-education/intraoral-camera', function () {
    return view('intraoral-camera');
})->name("intraoral-camera");

Route::get('/patient-information/patient-education/laser-dentistry', function () {
    return view('laser-dentistry');
})->name("laser-dentistry");

Route::get('/patient-information/patient-education/local-anesthesia', function () {
    return view('local-anesthesia');
})->name("local-anesthesia");

Route::get('/patient-information/patient-education/oral-cancer-screening', function () {
    return view('oral-cancer-screening');
})->name("oral-cancer-screening");

Route::get('/patient-information/patient-education/soft-tissue-laser-dentistry', function () {
    return view('soft-tissue-laser-dentistry');
})->name("soft-tissue-laser-dentistry");


// Dental Services routes
Route::get('/dental-services', function () {
    return view('dental-services');
})->name("dental-services");

Route::get('/dental-services/emergency-dentistry', function () {
    return view('emergency-dentistry');
})->name("emergency-dentistry");

Route::get('/dental-services/general-dentistry', function () {
    return view('general-dentist');
})->name("general-dentist");

Route::get('/dental-services/general-dentistry/air-abrasion', function () {
    return view('air-abrasion');
})->name("air-abrasion");

Route::get('/dental-services/general-dentistry/bridges', function () {
    return view('dental-bridges');
})->name("dental-bridges");

Route::get('/dental-services/general-dentistry/crowns', function () {
    return view('crowns');
})->name("crowns");

Route::get('/dental-services/general-dentistry/dentures', function () {
    return view('dentures');
})->name("dentures");

Route::get('/dental-services/general-dentistry/fillings', function () {
    return view('fillings');
})->name("fillings");

Route::get('/dental-services/general-dentistry/fluoride-treatments', function () {
    return view('fluoride-treatments');
})->name("fluoride-treatments");

Route::get('/dental-services/general-dentistry/inlays-and-onlays', function () {
    return view('inlays-and-onlays');
})->name("inlays-and-onlays");

Route::get('/dental-services/general-dentistry/nightguards', function () {
    return view('nightguards');
})->name("nightguards");

Route::get('/dental-services/general-dentistry/dental-sealants', function () {
    return view('dental-sealants');
})->name("dental-sealants");

Route::get('/dental-services/general-dentistry/sports-mouthguards', function () {
    return view('sports-mouthguards');
})->name("sports-mouthguards");

Route::get('/dental-services/general-dentistry/teeth-cleanings', function () {
    return view('teeth-cleanings');
})->name("teeth-cleanings");

// Meet us routes
Route::get('/meet-us/meet-dr-yousif', function () {
    return view('meet-dr-yousif');
})->name("meet-dr-yousif");

Route::get('/meet-us/smile-gallery', [PagesController::class, 'smileGalleryPage'])->name("smile-gallery");

// Blog routes
Route::get('/blog', [PagesController::class, 'blogPage'])->name("blog");

// Privacy Policy
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name("privacy-policy");

// Terms And Conditions
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name("terms-and-conditions");

// Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
