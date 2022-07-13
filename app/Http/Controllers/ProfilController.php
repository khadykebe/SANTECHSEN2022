<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function allProfil(){

        $profils = Profil::all();
        return view('PARENT.ADMINISTRATEUR.profil',compact('profils'));

    }

    public function createProfil(Request $request){

        $this->validate($request,['nomprofil' => 'required']);
        $profil = new Profil();
        $profil->nomprofil = $request->nomprofil;
        $profil->save();
        return redirect('profil')->with('success','profil engistrer avec success');
    }

    public function updateProfil(Request $request,$id){
       $profil = $request->validate(['nomprofil'=>'required']);
        $profil1 = Profil::whereId($id)->update($profil);
        return redirect('profil')->with('message','update reussite');
    }


    public function deleteProfil($id){
        DB::table('profils')->whereId($id)->delete();
        return redirect('profil')->with('message','supression réussit');
    }

    public function chowById($id){
        $profilss = Profil::find($id);
        return view('profil',compact('profilss'));
    }
}
