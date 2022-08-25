<?php

namespace App\Http\Controllers;

use App\Models\Type_page;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ]);

            $typepage = new Type_page();
            $typepage->nomType = $request->nomType;
            $typepage->dateCreation = $request->dateCreation;
            $typepage->status = 1;
            $typepage->idUtilisateur = session()->get('id-user');
            $typepage->save();
            return redirect('TypePage')->with('mess','ajout reussit');


    }

    public function destroy($id){
        DB::table('type_pages')->whereId($id)->delete();
        return redirect('TypePage')->with('sup','supression reussit');
    }

}
