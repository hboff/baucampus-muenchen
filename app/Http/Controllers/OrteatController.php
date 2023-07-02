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
            'baugutachter-sylt.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Sylt',
            ],
            'baugutachter-eisenach.com ' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Eisenach',
            ],
            'baugutachter-koeln.com' => [
                'laengengrad' => [6.6, 7.4],
                'breitengrad' => [50.8, 51.0],
                'domainort' => 'Köln',
            ],
            'baugutachter-muenster.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Münster',
            ],
            'baugutachter-mannheim.eu' => [
                'laengengrad' => [52.0, 53.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Mannheim',
            ],
             'baugutachter-moenchengladbach.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Mönchengladbach',
            ],
            'baugutachter-gelsenkirchen.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Gelsenkirchen',  
            ],
            'baugutachter-braunschweig.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Braunschweig',
            ],
            'baugutachter-chemnitz.com' => [
                'laengengrad' => [52.0, 53.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Chemnitz',
            ],
            'baugutachter-halle.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Halle',
            ],
            'baugutachter-freiburg.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Freiburg',
            ],
            'baugutachter-krefeld.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Krefeld',
            ],
            'baugutachter-oberhausen.com' => [
                'laengengrad' => [52.0, 53.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Oberhausen',
            ],
            'baugutachter-hagen.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Hagen',
            ],
            'baugutachter-potsdam.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Potsdam',
            ],
            'baugutachter-saarbruecken.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Saarbrücken',
            ],
            'baugutachter-ludwigshafen.com' => [
                'laengengrad' => [52.0, 53.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Ludwigshafen',
            ],
            'baugutachter-muelheim.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Mülheim',
            ],
            'baugutachter-oldenburg.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                 'domainort' => 'Oldenburg',
            ],
            'baugutachter-leverkusen.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Leverkusen',
            ],
            'baugutachter-solingen.com' => [
                'laengengrad' => [52.0, 53.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Solingen',
            ],
            'baugutachter-heidelberg.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Heidelberg',
            ],  
            'baugutachter-herne.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Herne',
            ],
            'baugutachter-neuss.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Neuss',
            ],
            'baugutachter-ingolstadt.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Ingolstadt',
            ],
            'baugutachter-offenbach.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Offenbach',
            ],
            'baugutachter-fuerth.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Fürth',
            ],
            'baugutachter-wuerzburg.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Würzburg',
            ],
            'baugutachter-heilbronn.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Heilbronn',
            ],
            'baugutachter-pforzheim.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Pforzheim',
            ],
            'baugutachter-bottrop.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Bottrop',
            ],
            'baugutachter-remscheid.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Remscheid',
            ],
            'baugutachter-reutlingen.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Reutlingen',
            ],
            'baugutachter-bremerhaven.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Bremerhaven',
            ],
            'baugutachter-koblenz.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Koblenz',
            ],
            'baugutachter-erlangen.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Erlangen',
            ],
            'baugutachter-jena.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Jena',
            ],
            'baugutachter-trier.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Trier',
            ],
            'baugutachter-salzgitter.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Salzgitter',
            ],
            'baugutachter-siegen.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Siegen',
            ],
            'baugutachter-guetersloh.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
                'domainort' => 'Gütersloh',
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
