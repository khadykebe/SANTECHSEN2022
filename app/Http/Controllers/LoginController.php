<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' =>'required'
        ]);
        $user = Utilisateur::where('email' , $request->email)->first();
        if ($user != null && Hash::check($request->password, $user->password)) {
            session()->put('id-user', $user->id);;
            return redirect('admin');
        }
        else
            return redirect('profil')->with('messagelogin','Email ou mot de passe incorect .');
     }
}
