<?php

namespace App\Http\Controllers;

use App\Models\DemandeService;
use App\Models\Service;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class ServiceController extends Controller
{
    public function AllService(){
        $type = TypeService::all();

        $services = DB::table('type_services')
        ->join('services','services.idTypeService','=','type_services.id')
        ->select('*')->get();
        $type = TypeService::all();
        return view('PARENT.Service.service',compact('services','type'));
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
        $service->idUtilisateur = session()->get('id-user');
        $service->save();
        return redirect('service')->with('success','service ajouter avec successe');
    }

    public function deleteService($id){

        $ser = Service::whereId($id)->first();
        if(session()->get('id-user') ==  $ser->idUtilisateur)
        {
            $demande = DemandeService::where('idService',$ser->id)->first();
            if($demande)  

                 return redirect('service')->with('mess',"Certains services sont liés à des demande . Supprime les demande avant de supprimer la servcie.");
                 
            else{

                $ser->delete();
                return redirect('service')->with('messd','suppression reussit');
            }
        }
        return redirect('service')->with('mess','vous n avait le doit de supprimer ce servive');
        
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
