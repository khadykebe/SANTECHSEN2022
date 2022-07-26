<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TypePage;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function AllService(){
        $type = TypeService::all();

        $services = DB::table('services')
        ->join('type_services','services.idTypeService','=','type_services.id')
        ->select('*')->get();
        return view('PARENT.Service.service',compact(session()->put('services',$services),session()->put('type',$type)));
    }

    public function store(Request $request){
        $this->validate($request , [
            'nomService'=>'required',
            'contenue'=>'required',
            'image'=>'required',
            'cout'=>'required',
            'dateCreation'=>'required',
            'idTypeService'=>'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('images', $imageName,'public');
        $service = new Service();
        $service->nomService = $request->nomService;
        $service->contenue = $request->contenue;
        $service->image =  $path ;
        $service->cout = $request->cout;
        $service->dateCreation = $request->dateCreation;
        $service->status = 1;
        $service->idTypeService = $request->idTypeService;
        $service->idUtilisateur = 1;
        $service->save();
        return redirect('service');
    }

    public function deleteService($id){
     
        DB::table('services')->whereId($id)->delete();
        return redirect('service');
    }


    public function allType(){
        $type = TypeService::all();
        return view('PARENT.Parametre.TypeService',compact('type'));
    }

    public function storetype(Request $request){
        $this->validate($request,  [
            'nomTypeService' =>'required',
        ]);
        $type = new TypeService();
        $type->nomTypeService = $request->nomTypeService;
        $type->status = 1;
        $type->save();
        return redirect('TypeService');
    }

    public function delete($id){
        DB::table('type_services')->whereId($id)->delete();
        return redirect('TypeService')->with('message');
    }
}
