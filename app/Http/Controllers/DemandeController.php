<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DemandeService;
use App\Models\Service;
use App\Models\Slide;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{

   public function storeClient(Request $request, request1 $, default = null)){
        $this->validate($request,[
            'nomclient'=>'required',
            'prenomclient'=>'required',
            'emailClient'=>'required',
        ]);

        $client = new Client();
        $client->nomclient = $request->nomclient;
        $client->prenomclient = $request->prenomclient;
        $client->emailClient = $request->emailClient;
        $client->save();
        return   redirect()->back()->with('message','s');             

   }

   public function storeDemande($id){

        $client = Client::all()->last();
        $demande = new DemandeService();
        $demande->idService = $id;
        $demande->idClient = $client->id;
        $demande->save();
        return redirect('/')->with('mess','votre demande a été enregistrer avec successe');
   }


   public function serviceById($id){
        $slide1 = Slide::all()->first();
        $slide2 = Slide::all()->last();
        $services = Service::find($id);
        return view('PARENT.Visite.demande',compact('services','slide1','slide2'));

    }
    
}