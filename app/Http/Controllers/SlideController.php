<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\ViewName;

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
            ]);;

        $imageName = time().'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('images', $imageName,'public');
        $slide  =new Slide();
        $slide->contenue = $request->contenue;
        $slide->image    = $path ;
        $slide->dateCreation = $request->dateCreation;
        $slide->idUtilisateur = 1;
        $slide->save();
        return redirect('Slide')->with('message','enregistrement reussit');

    }

    public function delete($id){
        DB::table('slides')->whereId($id)->delete();
        return redirect('Slide')->with('mess');
    }


    

}
