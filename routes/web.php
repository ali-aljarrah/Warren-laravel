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

// General Dentist routes
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

Route::get('/dental-services/general-dentistry/inlays-onlays', function () {
    return view('inlays-and-onlays');
})->name("inlays-and-onlays");

Route::get('/dental-services/general-dentistry/nightguards', function () {
    return view('nightguards');
})->name("nightguards");

Route::get('/dental-services/general-dentistry/sealants', function () {
    return view('dental-sealants');
})->name("dental-sealants");

Route::get('/dental-services/general-dentistry/sports-mouthguards', function () {
    return view('sports-mouthguards');
})->name("sports-mouthguards");

Route::get('/dental-services/general-dentistry/teeth-cleanings', function () {
    return view('teeth-cleanings');
})->name("teeth-cleanings");

// Cosmetic Dentist routes
Route::get('/dental-services/cosmetic-dentistry', function () {
    return view('cosmetic-dentistry');
})->name("cosmetic-dentistry");

Route::get('/dental-services/cosmetic-dentistry/bonding', function () {
    return view('bonding');
})->name("bonding");

Route::get('/dental-services/cosmetic-dentistry/smile-makeover-consultation', function () {
    return view('smile-makeover-consultation');
})->name("smile-makeover-consultation");

Route::get('/dental-services/cosmetic-dentistry/teeth-whitening', function () {
    return view('teeth-whitening');
})->name("teeth-whitening");

Route::get('/dental-services/cosmetic-dentistry/veneers', function () {
    return view('veneers');
})->name("veneers");

// Orthodontics routes
Route::get('/dental-services/orthodontics', function () {
    return view('orthodontics');
})->name("orthodontics");

Route::get('/dental-services/orthodontics/invisalign', function () {
    return view('invisalign');
})->name("invisalign");

Route::get('/dental-services/orthodontics/metal-braces', function () {
    return view('metal-braces');
})->name("metal-braces");

Route::get('/dental-services/orthodontics/suresmile', function () {
    return view('suresmile');
})->name("suresmile");

// Endodontics routes
Route::get('/dental-services/endodontics', function () {
    return view('endodontics');
})->name("endodontics");

Route::get('/dental-services/endodontics/root-canal-therapy', function () {
    return view('root-canal-therapy');
})->name("root-canal-therapy");

// Oral Surgery routes
Route::get('/dental-services/oral-surgery', function () {
    return view('oral-surgery');
})->name("oral-surgery");

Route::get('/dental-services/oral-surgery/bone-grafting', function () {
    return view('bone-grafting');
})->name("bone-grafting");

Route::get('/dental-services/oral-surgery/dental-implants', function () {
    return view('dental-implants');
})->name("dental-implants");

Route::get('/dental-services/oral-surgery/implant-supported-bridge', function () {
    return view('implant-supported-bridge');
})->name("implant-supported-bridge");

Route::get('/dental-services/oral-surgery/tooth-extractions', function () {
    return view('tooth-extractions');
})->name("tooth-extractions");

// Children’s Dentistry routes
Route::get('/dental-services/childrens-dentistry', function () {
    return view('childrens-dentistry');
})->name("childrens-dentistry");

Route::get('/dental-services/childrens-dentistry/your-childs-first-exam', function () {
    return view('your-childs-first-exam');
})->name("your-childs-first-exam");

Route::get('/dental-services/childrens-dentistry/children-orthodontics', function () {
    return view('children-orthodontics');
})->name("children-orthodontics");

// Periodontics routes
Route::get('/dental-services/periodontics', function () {
    return view('periodontics');
})->name("periodontics");

Route::get('/dental-services/periodontics/gum-disease', function () {
    return view('gum-disease');
})->name("gum-disease");

Route::get('/dental-services/periodontics/scaling-root-planing', function () {
    return view('scaling-root-planing');
})->name("scaling-root-planing");

// Meet us routes
Route::get('/meet-us', function () {
    return view('meet-us');
})->name("meet-us");

Route::get('/meet-us/meet-dr-yousif', function () {
    return view('meet-dr-yousif');
})->name("meet-dr-yousif");

Route::get('/meet-us/smile-gallery', [PagesController::class, 'smileGalleryPage'])->name("smile-gallery");

Route::get('/meet-us/patient-testimonials', [PagesController::class, 'patientTestimonialsPage'])->name("patient-testimonials");

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
