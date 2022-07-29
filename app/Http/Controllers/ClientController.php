<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function AllClient(){
        $clients = Client::all();
        return view('PARENT.Service.Client',compact('clients'));
    }

    public function store(Request $request){
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
        return redirect('/')->with('success','votre demande a été enr"gistrer avec successe');
    }

    public function delete($id){
        DB::table('clients')->whereId($id)->delete();
        return redirect('client')->with('mes','suppression reussit');
    }
}
