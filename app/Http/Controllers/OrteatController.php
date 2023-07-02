<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteatController extends Controller
{
    // Show single lisitng
    public function show($ortat) {
        $status='at';
        
        $domains = [
            'baugutachter-muenchen.eu' => [
                'laengengrad' => [10.85, 13.9],
                'breitengrad' => [47.79, 48.9],
                'domainort' => 'München',
            ],
        ];
        
        
        foreach ($domains as $domain => $domainData) {
     
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
        
        $cityData = DB::table('city_data')->select('laenge', 'breite')->where('stadt_umlaut', $ortat)->first();
        $laengengrad = $cityData->laenge;
        $breitengrad = $cityData->breite;

        $nearestCities = DB::select(DB::raw("
    SELECT DISTINCT stadt_umlaut, stadt,
    (
        3959 * acos (
            cos ( radians(?) )
            * cos( radians( breite ) )
            * cos( radians( laenge ) - radians(?) )
            + sin ( radians(?) )
            * sin( radians( breite ) )
        )
    ) AS distance
    FROM city_data
    HAVING distance < 50
    ORDER BY distance
    LIMIT 0 , 16
"), [$breitengrad, $laengengrad, $breitengrad]);
        
      
        return view('landingpage', [
            'nearestCities' => $nearestCities,
            'expert' => $expert,
            'data' => $data,
            'ortsname'=> $ortat,
            ]);    }  
        }       
    
}
