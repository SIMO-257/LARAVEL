<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editeur extends Model
{
    protected $primaryKey = 'num';

    protected $fillable = ["adresse","tel"];

    public function romans(){
        return $this->hasMany(Roman::class,"numd","num");
    }
}
