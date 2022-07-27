<?php

namespace App\Http\Controllers;

use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    public function AllService(){
        $type = TypeService::all();

        $services = DB::table('services')
        ->join('type_services','services.idTypeService','=','type_services.id')
        ->select('*')->get();
        return view('PARENT/demande/demande',compact(session()->put('services',$services),session()->put('type',$type)));
    }

}
