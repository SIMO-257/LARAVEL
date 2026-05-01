<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Editeur;
use App\Models\Roman;
use Illuminate\Http\Request;

class RomanController extends Controller
{
    public function index(){
        $romans = Roman::all();
        return view("controle1.index",compact("romans"));
    }

    public function store(Request $req){
        $data = $req->validate([
            'titre' => 'required|string|max:80',
            'auteur' => 'required|exists:auteurs,idaut',
            'prix' => 'nullable|numeric|min:0',
            'annee' => 'required|integer',
            'couverture' => 'nullable|file|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'numd' => 'required|exists:editeurs,num',
        ]);

        if ($req->hasFile('couverture')) {
            $data['couverture'] = $req->file('couverture')->store('couvertures', 'public');
        }

        Roman::create($data);
        return redirect()->route("romans.index");
    }

    public function create(){
        $auteurs = Auteur::all();
        $editeurs = Editeur::all();
        return view("controle1.create",compact("auteurs","editeurs"));
    }

    public function show($id){
        $roman = Roman::find($id);
        return view("controle1.show",compact("roman"));
    }

    public function edit($id){
        $roman = Roman::find($id);
        return view("controle1.edit",compact("roman"));
    }

    public function update(Request $req,$id){
        $roman = Roman::find($id);
        $data = $req->validate([
            'titre' => 'required|string|max:80',
            'auteur' => 'required|exists:auteurs,idaut',
            'prix' => 'nullable|numeric|min:0',
            'annee' => 'required|integer',
            'couverture' => 'nullable|file|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'numd' => 'required|exists:editeurs,num',
        ]);

        if ($req->hasFile('couverture')) {
            $data['couverture'] = $req->file('couverture')->store('couvertures', 'public');
        }
        $roman->update($data);
        return redirect()->route("romans.index");
    }

    public function delete($id){
        Roman::destroy($id);
        return redirect()->route("romans.index");
    }
    
}
