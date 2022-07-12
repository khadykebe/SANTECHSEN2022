<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UtilisateurController;
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
Route::get('client',function(){return view('PARENT.Service.Client');});
Route::get('service',function(){return view('PARENT.Parametre.TypeService');});
Route::get('page',function(){return view('PARENT.Parametre.TypePage');});

// route crud profil

Route::get("profil",[ProfilController::class,"allProfil"]);
Route::post("createProfil",[ProfilController::class,"createProfil"])->name('profil.create');
Route::get("profil/{id}",[ProfilController::class,"deleteProfil"])->name('prodil.delete');
Route::put("profil/{id}",[ProfilController::class,"updateProfil"])->name('profil.update');
Route::get('chow/{id}',[ProfilController::class,'chowById'])->name('profil.chow');

//route crud utilisateur

Route::get('utilisateur',[UtilisateurController::class,"AllUtilisateur"]);
Route::post('create',[UtilisateurController::class,"UtilisateurCreate"])->name('utilisateur.create');
Route::get('utilisateur/{id}',[Utilisateur::class,"destroy"])->name('utilisateur.delete');
Route::put('utilisateur/{id}',[Utilisateur::class,"update"])->name('utilisateur.update');
