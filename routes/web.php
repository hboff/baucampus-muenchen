<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/preise', function () {
    return view('preise');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/leistungen', function () {
    return view('leistungen');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});


Route::get('/dienstleistungen/bauschaden', function () {
    return view('dienstleistungen.bauschaden');
});

Route::get('/dienstleistungen/baubegleitung', function () {
    return view('dienstleistungen.baubegleitung');
});

Route::get('/dienstleistungen/energieberatung', function () {
    return view('dienstleistungen.energieberatung');
});

Route::get('/dienstleistungen/hauskaufberatung', function () {
    return view('dienstleistungen.hauskaufberatung');
});

Route::get('/dienstleistungen/immobilienbewertung', function () {
    return view('dienstleistungen.immobilienbewertung');
});

Route::get('/dienstleistungen/schimmelpilz', function () {
    return view('dienstleistungen.schimmelpilz');
});

Route::get('/legal/impressum', function () {
    return view('legal.impressum');
});

Route::get('/legal/datenschutz', function () {
    return view('legal.datenschutz');
});

Route::get('/leistungen/ausbildung', function () {
    return view('leistungen.ausbildung');
});

Route::get('/leistungen/beratung', function () {
    return view('leistungen.beratung');
});

Route::get('/leistungen/bewertung', function () {
    return view('leistungen.bewertungen');
});

Route::get('/leistungen/inspektion', function () {
    return view('leistungen.inspektion');
});

