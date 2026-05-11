<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class InscriptionController extends Controller
{

public function show(){
    return view ("auth.register");
}

public function register(Request $request){
    $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
]);
    $user = AppUser::create([
        'nom' => $request->nom,
        'email' => $request->email,
        'password' => Hash::make($request->password),
]);
    Auth::login($user);
    return redirect()->route('home');
}
}

