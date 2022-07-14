<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Partenair;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes- are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // route page admin

Route::get('/',function(){return view('PARENT.Visite.user');});
Route::get('admin', function () {return view('PARENT.AdminPage.Accueil');});
Route::get('QuiSommeNous',function(){return view('PARENT.AdminPage.QuiSommeNous');});
Route::get('contact',function(){return view('PARENT.AdminPage.Contact');});
Route::get('slide',function(){return view('PARENT.AdminPage.Slide');});
Route::get('utilisateur',function(){return view('PARENT.ADMINISTRATEUR.utilisateur');});
Route::get('profil',function(){return view('PARENT.ADMINISTRATEUR.profil');});
Route::get('liste',function(){return view('PARENT.Partenaire.ListePartenaire'); });
Route::get('demande',function(){return view('PARENT.Service.Demande');});
Route::get('service',function(){return view('PARENT.Service.service');});
Route::get('client',function(){return view('PARENT.Service.Client');});
Route::get('service',function(){return view('PARENT.Parametre.TypeService');});
Route::get('page',function(){return view('PARENT.Parametre.TypePage');});


//loin utilisateur
Route::post('profil',[LoginController::class,'login'])->name('login');

// route crud profil

Route::get("profil",[ProfilController::class,"allProfil"]);
Route::post("createProfil",[ProfilController::class,"createProfil"])->name('profil.create');
Route::get("profil/{id}",[ProfilController::class,"deleteProfil"])->name('prodil.delete');
Route::put("profil/{id}",[ProfilController::class,"updateProfil"])->name('profil.update');
Route::get('chow/{id}',[ProfilController::class,'chowById'])->name('profil.chow');

//route crud utilisateur

Route::get('utilisateur',[UtilisateurController::class,"AllUtilisateur"])->name('utilisateur.index');
Route::post('create',[UtilisateurController::class,"UtilisateurCreate"])->name('utilisateur.create');
Route::get('utilisateur/{id}',[UtilisateurController::class,"deleteUtilisateur"])->name('utilisateur.delete');
Route::put('update/{id}',[UtilisateurController::class,"update"])->name('utilisateur.update');
Route::get('chow/{id}',[UtilisateurController::class,"chowById"]);

// route Client

Route::get('client',[ClientController::class,'AllClient']);
Route::post('Client',[ClientController::class,'store'])->name('client_create');
Route::get('client/{id}',[ClientController::class,'delete'])->name('client_delete');


//route partenaire

Route::get('liste',[PartenaireController::class,'AllPartenaire']);
Route::post('liste',[PartenaireController::class,'store'])->name('partenaire.create');
Route::get('liste/{id}',[PartenaireController::class,'delete'])->name('partenaire.delete');

//route service

Route::get('service',[ServiceController::class,'AllService']);
