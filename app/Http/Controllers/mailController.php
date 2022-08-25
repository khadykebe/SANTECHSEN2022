<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendmail(){
        $detail = [
            'titre' =>'titre',
            'body' =>  'contenue mail'
        ];

        Mail::to("khadykebe1195@gmail.com")->send(new SendMail($detail));
        return "Email email";
    }

   
}
