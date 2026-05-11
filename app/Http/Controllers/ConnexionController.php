<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConnexionController extends Controller
{

    public function show(){
        return view ("auth.connexion");
    }
    public function login(Request $request){
        
    if(Auth::attempt(["email"=>$request->email, "password"=>$request->password])){
            $request->session()->regenerate();
            return redirect()->intended(); 
    }
 
    return back()->withErrors([
        'email' => 'Adresse email invalide!',
    ])->onlyInput('email');

}
}