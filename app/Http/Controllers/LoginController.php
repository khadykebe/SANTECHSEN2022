<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPassword;
use App\Models\Utilisateur;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' =>'required'
        ]);
        $user = Utilisateur::where('email' , $request->email)->first();
        if ($user != null && Hash::check($request->password, $user->password)) {
            
            return redirect('admin')->with(session()->put('id-user', $user->id));
        }
        else
            return redirect('/')->with('messagelogin','Email ou mot de passe incorect .');
     }

     public function forgetPassword(Request $request){
         $this->validate($request,['email'=>'required']);
        $user = Utilisateur::where('email' , $request->email)->first();
        $codes = [
            'code' => mt_Rand(1000, 9999)
        ];
        if($user){
            Mail::to($user->email)->send(new ForgetPassword($codes));
            return view('PARENT.AdminPage.Accueil');
            #->back()->with('message','reussit');
        }

     }
}
