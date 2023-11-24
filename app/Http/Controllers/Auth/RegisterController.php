<?php

namespace App\Http\Controllers\Auth;

use App\Enums\SecteurActivites;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\Societe;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        $secteurs = array_map(fn($case)=>$case->value,SecteurActivites::cases());
        return view('pages.auth.register', compact('secteurs'));
    }

    public function register(RegisterRequest $request) {

       $societe = Societe::create([
        "nom"=>$request->nom_societe,
        "secteur_activite"=>$request->secteur_activite
       ]);
       $user = User::create([
        "nom"=>$request->nom_admin,
        "prenom"=>$request->prenom_admin,
        "email"=>$request->email_admin,
        "password"=>bcrypt($request->password_admin),
        "id_societe"=>$societe->id
       ]);
       $user->assignRole(Role::where('name','Administrateur')->first());
       return redirect()->route('connexion')->with('success','Votre compte a été créer avec succes.');
    }

    public function success() {
        return view('pages.auth.succesmessage');
    }
}
