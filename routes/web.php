<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/baugutachter', function () {
    return view('landingpage');
});


foreach ($domains as $domain => $domainData) {
    Route::domain($domain)->group(function () use ($routes, $domainData) {
        Route::get('/', function() use ($domainData) {
            $data = DB::table('city_data')
                        ->whereBetween('laenge', $domainData['laengengrad'])
                        ->whereBetween('breite', $domainData['breitengrad'])
                        ->get();
                        
                        $expert = DB::table('city_data')
                        ->join('gutachter', function($join) {
                            $join->on('city_data.laenge', '>=', 'gutachter.Lon')
                                 ->on('city_data.laenge', '<=', 'gutachter.Lon2')
                                 ->on('city_data.breite', '>=', 'gutachter.Lat')
                             ->on('city_data.breite', '<=', 'gutachter.Lat2');
                        })
                        ->get();
            View::share('data', $data);
            return view('index', ['expert' => $expert,'domainort' => $domainData['domainort']]);
        });
        Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){});
        Route::get('/{ort}', [OrteatController::class, 'show'], function () use ($domainData) {});
        
});
}