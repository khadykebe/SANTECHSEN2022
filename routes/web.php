<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TypePageController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\WelcomController;
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
Route::get('page',function(){return view('PARENT.ADMINISTRATEUR.page');});
Route::get('liste',function(){return view('PARENT.Partenaire.ListePartenaire'); });
Route::get('Demande',function(){return view('PARENT.Service.Demande');});
Route::get('demande',function() {return view('PARENT.Visite.demande');});
Route::get('service',function(){return view('PARENT.Service.service');});
Route::get('client',function(){return view('PARENT.Service.Client');});
Route::get('TypeService',function(){return view('PARENT.Parametre.TypeService');});
Route::get('TypePage',function(){return view('PARENT.Parametre.TypePage');});


//login utilisateur
Route::post('admin',[LoginController::class,'login'])->name('login');
Route::post('forgetPassword',[LoginController::class,'forgetPassword'])->name('password.create');
Route::post('ConfirmeCode',[LoginController::class,'confirmationCode'])->name('code.confirm');
Route::post('changePassword',[LoginController::class,'changementPasword'])->name('changer.pass');
// route crud profil

Route::get("profil",[ProfilController::class,"allProfil"]);
Route::post("createProfil",[ProfilController::class,"createProfil"])->name('profil.create');
Route::get("profil/{id}",[ProfilController::class,"deleteProfil"])->name('prodil.delete');
Route::put("profil/{id}",[ProfilController::class,"updateProfil"])->name('profil.update');
Route::get('chow/{id}',[ProfilController::class,'chowById'])->name('profil.chow');

//route crud utilisateur

Route::get('utilisateur',[UtilisateurController::class,"AllUtilisateur"])->name('utilisateur.index');
Route::post('utilisateur',[UtilisateurController::class,"UtilisateurCreate"])->name('utilisateur.create');
Route::get('utilisateur/{id}',[UtilisateurController::class,"deleteUtilisateur"])->name('utilisateur.delete');
Route::put('update/{id}',[UtilisateurController::class,"update"])->name('utilisateur.update');
Route::get('chow/{id}',[UtilisateurController::class,"chowById"]);

// route Client

Route::get('client',[ClientController::class,'AllClient']);
Route::post('demande',[DemandeController::class,'storeClient'])->name('client_create');
Route::get('client/{id}',[ClientController::class,'delete'])->name('client_delete');


//route partenaire

Route::get('liste',[PartenaireController::class,'AllPartenaire']);
Route::post('liste',[PartenaireController::class,'store'])->name('partenaire.create');
Route::get('liste/{id}',[PartenaireController::class,'delete'])->name('partenaire.delete');

//route service

Route::get('service',[ServiceController::class,'AllService']);
Route::post('createServcie',[ServiceController::class,'store'])->name('service.create');
Route::get('deleteService/{id}',[ServiceController::class,'deleteService'])->name('service.delete');


Route::post('newtype',[ServiceController::class,'storetype'])->name('type.create');
Route::get('delete/{id}',[ServiceController::class,'delete'])->name('type.delete');
Route::get('TypeService',[ServiceController::class,'allType']);


//route  typePage
Route::get('TypePage',[TypePageController::class,'AllTypepage']);
Route::post('newTypePage',[TypePageController::class,'store'])->name('create.typepage');
Route::get('deletetype/{id}',[TypePageController::class,'destroy'])->name('delete.typePage');

//pages
Route::get('page',[PageController::class,'allPage']);
Route::post('newPage',[PageController::class,'store'])->name('create.page');
Route::get('deletePage',[PageController::class,'destroy'])->name('delete.page');



//route slide

Route::get('slide',[SlideController::class,'AllSlide']);
Route::post('slide',[SlideController::class,'store'])->name('create.slide');
Route::get('deleteSlide/{id}',[SlideController::class,'delete'])->name('delete.slide');

//acceuil
Route::get('demande',[WelcomController::class,'index']);
Route::get('/',[WelcomController::class,'acceuil']);

// demande 

Route::get('service/{id}',[DemandeController::class,'serviceById'])->name('serviceById');
Route::post('new/{id}',[DemandeController::class,'storeDemande'])->name('demande_create');
Route::get('admin',[DemandeController::class,'AllDemande']);
Route::get('Demande',[DemandeController::class,'DemandeClient']);
Route::get('delet/{id}',[DemandeController::class,'deleteDemande'])->name('delete.demande');

Route::get('send_mail',[mailController::class,'sendmail']);



