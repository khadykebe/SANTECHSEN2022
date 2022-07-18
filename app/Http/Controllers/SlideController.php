<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function AllSlide(){
        $slides = Slide::all();
        return view('PARENT.AdminPage.Slide',compact('slides'));
    }

    public function store(Request $request){
        $this->validate($request ,[
            'contenue'=>'required',
            'image'=>'required',
            'dateCreation'=>'required',
            'idUtilisateur'=>'required',
        ]);;

        $imageName = time().'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('images', $imageName,'public');
        $slide  =new Slide();
        $slide->contenue = $request->contenue;
        $slide->image    = $path ;
        dd($slide);
        $slide->dateCreation = $request->dateCreation;
        //$slide->idUtilisateur = session()->get('id_user');
        $slide->save();

        return view('PARENT.AdminPage.Slide',compact('slides'))->with('message','enregistrement reussit');

    }

}
