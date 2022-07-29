<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DemandeService;
use App\Models\Service;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{

   /* public function serviceById($id){
        $services = Service::find($id);
        return view('PARENT.Visite.demande',compact('services'));
    }*/



   public function storeClient(Request $request,$id){
    $this->validate($request,[
        'nomclient'=>'required',
        'prenomclient'=>'required|unique:clients,prenomclient',
        'emailClient'=>'required',
    ]);

    $client = new Client();
    $client->nomclient = $request->nomclient;
    $client->prenomclient = $request->prenomclient;
    $client->emailClient = $request->emailClient;
    $client->save();

    $demande = new DemandeService();
    $demande->idService = $id;
    $demande->idClient = session()->get('id');
    $demande->save();

    session()->put('id',$client->id);
    return redirect('/')->with('success','votre demande a été enr"gistrer avec successe');

   }


   public function store($id){

        $services = Service::find($id);
        return view('PARENT.Visite.demande',compact('services'));

    }
}
