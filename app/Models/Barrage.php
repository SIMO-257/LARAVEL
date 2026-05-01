<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barrage extends Model
{
    protected $primaryKey = 'BarrageId';

    protected $fillable = ["Nom","Riviere","DateConstruction"];

    public function entrees_eaux(){
        return $this->hasMany(EntreeEau::class,"BarrageId","BarrageId");
    }

    public function points_sorties(){
        // return $this->hasMany(PointSortie::class,"BarrageId","BarrageId");
    }
}
