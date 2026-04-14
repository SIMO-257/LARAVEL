<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stagiaire;
use Illuminate\Http\Request;


class StagiairesController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all() ;
        return $stagiaires;
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
