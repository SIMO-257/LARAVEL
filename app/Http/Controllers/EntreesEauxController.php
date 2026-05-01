<?php

namespace App\Http\Controllers;

use App\Models\Barrage;
use App\Models\EntreeEau;
use Illuminate\Http\Request;

class EntreesEauxController extends Controller
{
    public function store(Request $req){

        $req->validate([
            "BarrageId" => "required|exists:barrages,BarrageId",
            "DateDebut" => "required",
            "DateFin" => "required",
            "QuantiteTotal" => "required",
            "Origine" => "required",
        ]);

        EntreeEau::create($req->all());

        return response()->json(["message"=>"Creer avec Succes!"]);
    }

    public function ListBarrageByRiviere($riviere){
        $barrages = Barrage::where("Riviere",$riviere)->get();
        return response()->json($barrages);
    }

    public function calculGTotal($nomBarrage){

        $liste_entrees = Barrage::where("Nom",$nomBarrage)->get()->first()->entrees_eaux;
        $total = 0;

        foreach($liste_entrees as $e){
            $total += $e->QuantiteTotal;
        }

        return $total;
    }

    public function getEntreesEaux(Request $req){

        $list = Barrage::where("Nom",$req->nom)->get()->first()->entrees_eaux;
        $somme = $this->calculGTotal($req->nom);
        $barrages = Barrage::all();

        return view("controle2.entresEauParBarrage",compact("list","somme","barrages"));
        
    }
}
