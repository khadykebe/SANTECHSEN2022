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
        session()->put('email',$user->email);
        if($user){
            $code = mt_Rand(1000, 9999);
            session()->put('code',$code);
            Mail::to($user->email)->send(new ForgetPassword($code));
            return redirect()->back()->with('message','reussit');
        }

     }

     public function confirmationCode(Request $request){
            $this->validate($request ,[ 'code' => 'required']);
            if($request->code == session()->get('code')){
                return redirect()->back()->with('message','reussit');
            }

            else 
                return redirect()->back()->with('message','non_reussit');

     }
     
     public function changementPasword(Request $request){
         $this->validate($request , [
             'password' => 'required',
             'confirmePasword'=>'required'
          ]);
          if($request->password == $request->confirmePasword){
            $user = Utilisateur::where('email' ,session()->get('email'))->first();
            $user->password = $request->password;
            return redirect('admin');
              
          }

     }
}
