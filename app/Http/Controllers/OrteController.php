<?php

namespace App\Http\Controllers;


use App\Models\Ort;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteController extends Controller
{
    // Show single lisitng
    public function show($ort) {
        $status='ch';
        return view('unterseiten.bausachverstaendiger', compact('status'), [
            'ortsname'=> $ort,
            ]);    }          
    
    public function index() {
        $status='ch';
        return view ('index', compact('status'));
    }
    public function startseite() {
        $status='ch';
        return view ('startseite', compact('status'));
    }
    public function schimmelpilz() {
        $status='ch';
        return view ('unterseiten.schimmelpilz', compact('status'));
    }
    public function hauskaufberatung() {
        $status='ch';
        return view ('unterseiten.hauskaufberatung', compact('status'));
    }
    public function baubegleitung() {
        $status='ch';
        return view ('unterseiten.baubegleitung', compact('status'));
    }
    public function bauschaden() {
        $status='ch';
        return view ('unterseiten.bauschaden', compact('status'));
    }
    public function energieberatung() {
        $status='ch';
        return view ('unterseiten.energieberatung', compact('status'));
    }
    public function immobilienbewertung() {
        $status='ch';
        return view ('unterseiten.immobilienbewertung', compact('status'));
    }
    public function team() {
        $status='ch';
        return view ('unterseiten.team', compact('status'));
    }
    public function gutachter() {
        $status='ch';
        return view ('unterseiten.gutachter', compact('status'));
    }
}