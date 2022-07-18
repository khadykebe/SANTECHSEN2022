<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function AllService(){
        $services = Service::all();
        return view('PARENT.Service.service',compact('services'));
    }

    public function store(Request $request){
        $this->validate($request , [
            'nomService'=>'required',
            'contenue'=>'required',
            'image'=>'required',
            'cout'=>'required',
            'dateCreation'=>'required',
            'status'=>'required',
            'idTypeService'=>'required',
            'idUtilisateur'=>'required'
        ]);
        
    }
}
