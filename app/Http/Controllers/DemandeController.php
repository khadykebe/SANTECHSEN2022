<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Client;
use App\Models\DemandeService;
use App\Models\Service;
use App\Models\Slide;
use App\Models\TypeService;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
     public function   AllDemande(){
          $service = Service::all()->count();
          $utilisateur = Utilisateur::all()->count();
          $demande = DemandeService::all()->count();
          return view('PARENT.AdminPage.Accueil',compact('demande','service','utilisateur'));
     }
     

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
        $clients->codeValidation = mt_Rand(1000, 9999);
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
          return  redirect()->back()->with('mess','veuiller saisir le bon code');
   }

   public function serviceById($id){
        $slide1 = Slide::all()->first();
        $slide2 = Slide::all()->last();
        $services = Service::find(decrypt($id));
        return view('PARENT.Visite.demande',compact('services','slide1','slide2'));

    }

    public function DemandeClient(){
        $demandeClent =  DB::table('demande_services')
         ->join('clients','demande_services.idClient','=','clients.id')
         ->join('services','demande_services.idservice','=','services.id')
         ->select('*')->get();
         return view('PARENT.Service.Demande',compact('demandeClent'));
    }
    
    public function  deleteDemande($id){
         DB::table('demande_services')->whereId($id)->delete();
         return redirect('Demande')->with('mess','suppression reussit');
    }
}