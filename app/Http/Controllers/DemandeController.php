<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Client;
use App\Models\DemandeService;
use App\Models\Service;
use App\Models\Slide;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
     

     public function storeClient(Request $request){
        $this->validate($request,[
            'nomclient'=>'required',
            'prenomclient'=>'required',
            'emailClient'=>'required',

        ]);

        $clients = new Client();
        $clients->nomclient = $request->nomclient;
        $clients->prenomclient = $request->prenomclient;
        $clients->emailClient = $request->emailClient;
        $clients->codeValidation = mt_Rand(100000, 999999);
        $clients->save();
        
        Mail::to($clients->emailClient)->send(new SendMail($clients));
        return redirect()->back()->with('message','reussit');             

   }

   public function storeDemande(Request $request, $id){
        $this->validate($request,[
             'codeValidation' => 'required'
        ]);

        $client = Client::all()->last();
        $demande = new DemandeService();
        $demande->idService = $id;
        $demande->idClient = $client->id;
        if ($client->codeValidation == $request->codeValidation) {
               $demande->save();
               return redirect('/')->with('mess','votre demande a été enregistrer avec successe');
        }
        else
          return back()->with('mess','error');
   }

   public function serviceById($id){
        $slide1 = Slide::all()->first();
        $slide2 = Slide::all()->last();
        $services = Service::find($id);
        return view('PARENT.Visite.demande',compact('services','slide1','slide2'));

    }
    
}