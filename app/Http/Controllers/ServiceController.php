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
}
