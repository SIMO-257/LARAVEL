<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Etape;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function Afficher(){
        $projets = Projet::has('etapes')->get();
        return view("gestion.index",compact("projets"));
    }

    public function show($projet)
{
    $projet = Projet::find($projet);
    $etapes = $projet->etapes;
    return view('gestion.show', compact('projet', 'etapes'));
}


    public function store(Request $request)
    {
        $etape = new Etape();
        $etape->update($request->all());
        $etape->save();
        return redirect()->route('index');
    }

}
