<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{

    public function index()
    {
        $patients = DB::table("patients")->get();
        return view('patients.index', compact('patients'));
    }


    public function create()
    {
        return view('patients.create');
    }


    public function store(Request $request)
    {
        DB::table('patients')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'groupe_sanguin' => $request->groupe_sanguin
        ]);
        return redirect()->route('patients.index');
    }

    public function edit(string $num_dossier)
    {
        $patient = DB::table("patients")->where('num_dossier', $num_dossier)->first();
        return view('patients.edit',compact('patient'));
    }

    public function update(Request $request, string $num_dossier)
    {
        DB::table('patients')->where('num_dossier', $num_dossier)->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'groupe_sanguin' => $request->groupe_sanguin
        ]);
        return redirect()->route('patients.index');
    }

    public function destroy(string $num_dossier)
    {
        DB::table('patients')->where('num_dossier',$num_dossier)->delete();
        return redirect()->route('patients.index');
    }
}
