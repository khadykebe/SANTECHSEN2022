<?php

namespace App\Http\Controllers;

use App\Models\Partenair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartenaireController extends Controller
{
    public function AllPartenaire(){

        $partenaires = Partenair::all();
        return view('PARENT.Partenaire.ListePartenaire',compact('partenaires'));
    }

    public function store(Request $request){
        $this->validate($request ,[
            'nomPartenaire' => 'required',
            'emailPartenaire'=> 'required|unique:partenairs,emailPartenaire',
            'password'=> 'required',
            'telephone'=> 'required|unique:partenairs,telephone',
            'logo'=> 'required|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->logo->extension();
        $path = $request->file('logo')->storeAs('images', $imageName,'public');
        $partenaire = new Partenair();
        $partenaire->nomPartenaire = $request->nomPartenaire;
        $partenaire->emailPartenaire = $request->emailPartenaire;
        $partenaire->password = bcrypt($request->password);
        $partenaire->telephone = $request->telephone;
        $partenaire->logo = $path;
        $partenaire->save();
        return redirect('liste')->with('success','partenaire enrégistrer avec success');
    }

    public function delete($id){
        DB::table('partenairs')->whereId($id)->delete();
        return redirect('liste')->with('mes','supression réussit');
    }
}
