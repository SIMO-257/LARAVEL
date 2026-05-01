<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $primaryKey = 'idaut';

    protected $fillable = ["nom","prenom","age","nationalité"];

    public function romans(){
        return $this->hasMany(Roman::class,"auteur","idaut");
    }
}
