<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntreeEau extends Model
{
    protected $primaryKey = 'EntreeEauId';

    protected $fillable = ["DateFin","DateDebut","QuantiteTotal"];

    public function barrage(){
        return $this->belongsTo(Barrage::class,"BarrageId","BarrageId");
    }
}
