<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    Public function acceuil(){
        return view('acceuilizy');
    }
    Public function connexion(Request $request){
         /** Validation des donnees enregistrer */
        //validation des requete de type mail
        $request-> validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        /**Le modele ou vou voler faire un login */

        /**les champ dans la base */
        $credentials=$request->only('email', 'password');
     
        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome');
        }
        return redirect()->back()->withErrors('Password invalid or Email');



    }
    public function logout(){
        Auth::logout();
        return redirect()->route('acceuil');
    }
}
