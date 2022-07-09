<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    public function AllUtilisateur(){
        $profils = Profil::all();
        $utilisateur = Utilisateur::all();
        return view('PARENT.ADMINISTRATEUR.utilisateur',compact('profils'))->with('utilisateurs',$utilisateur);
    }

    public function UtilisateurCreate(Request $request){
        $this->validate($request,[
            'nom' => 'required|max:255',
            'prenom'=> 'required|max:255',
            'email'=> 'required|email|unique:utilisateurs,email',
            'password'=> 'required|max:255',
            'telephone'=> 'required|max:255',
            'adresse'=> 'required|max:255',
            'photo'=> 'required|mimes:jpeg,png,jpg,svg|max:2048',
            'status'=> 'required',
            'idProfil'=> 'required',
        ]);
        $imageName = time().'.'.$request->photo->extension();
        $path = $request->file('photo')->storeAs('images', $imageName,'public');
        $utilisateur = new  Utilisateur();
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = bcrypt($request->email);
        $utilisateur->telephone = $request->telephone;
        $utilisateur->adresse = $request->adresse;
        $utilisateur->photo =$path ;
        $utilisateur->status = $request->status;
        $utilisateur->idProfil = $request->idProfil;
        $utilisateur->save();
        return redirect('utilisateur')->with('success','Utilisateur enrégistrer avec success');
    }

    public function destroy($id){
        DB::table('utilisateurs')->whereId($id)->delete();
        return redirect('utilisateur')->with('message','supression avec success');
    }

    public function update(Request $request, $id){
        $utilisateur =  $request->validate([
            'nom' => 'required|max:255',
            'prenom'=> 'required|max:255',
            'email'=> 'required|email|unique:utilisateurs,email',
            'password'=> 'required|max:255',
            'telephone'=> 'required|max:255',
            'adresse'=> 'required|max:255',
            'photo'=> 'required|photo|mimes:jpeg,png,jpg,svg|max:2048',
            'status'=> 'required',
            'idProfil'=> 'required',
        ]);

        Utilisateur::whereId($id)->update($utilisateur);
        return redirect('utilisateur')->with('message','update reussit');
    }



}
