<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Http\Request;


class StagiairesController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all() ;
        return $stagiaires;
    }

    public function afficher($id)
    {
        $id == 0 ? Stagiaire::all() : Stagiaire::where("filiere_id",$id)->get();
        // $stagiaires = Stagiaire::where("filierephp artisan serve_id",$id)->get() ;
        // return response()->json($stagiaires);
    }

    public function filieres_list()
    {
        $filieres = Filiere::all();
        return response()->json($filieres);
    }

    public function store(Request $req)
    {
        $stagiaire = Stagiaire::create($req->all()) ;
        return response()->json($stagiaire);
    }

    public function update(Request $req,$id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->update($req->all());
        return response()->json($stagiaire);
    }

    public function destroy($id)
    {
        Stagiaire::destroy($id);
        return response()->json(["message"=>"Stagaire deleted successfuly!"]);
    }
}
