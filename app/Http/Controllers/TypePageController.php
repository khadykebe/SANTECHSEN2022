<?php

namespace App\Http\Controllers;

use App\Models\Type_page;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class TypePageController extends Controller
{
    public function AllTypepage(){

        $typepages = Type_page::all();
        return view('PARENT.Parametre.TypePage',compact('typepages'));
    }

    public function store(Request $request){
            $this->validate($request ,[
                'nomType'=>'required',
                'dateCreation'=>'required',
                'status'=>'required',
                'idUtilisateur'=>'required',
            ]);

            $typepage = new Type_page();
            $typepage->nomType = $request->nomType;
            $typepage->dateCreation = $request->dateCreation;
            $typepage->status = $request->status;
            $typepage->idUtilisateur = session()->get('id_user');
            if( $typepage!= null){
                $typepage->save();
                session()->put('nom',$typepage->nomType);
                return view('TypePage')->with('mess','ajout reussit');
            }
            else
                return view('profil')->with('mess','ajout reussit');

    }
}
