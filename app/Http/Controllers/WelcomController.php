<?php

namespace App\Http\Controllers;

use App\Models\Partenair;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomController extends Controller
{

    public function   index(){
        return view('PARENT.Visite.demande');
    }
    
    public function acceuil(){
        $slide1 = Slide::all()->first();
        $slide2 = Slide::all()->last();
        $partenaire = Partenair::all();
        $services = DB::table('type_services')
        ->join('services','services.idTypeService','=','type_services.id')
        ->select('*')->get();
        return View('PARENT.Visite.user',compact('slide1','slide2','services','partenaire'));
    }


}
