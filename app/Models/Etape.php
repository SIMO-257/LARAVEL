<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    protected $table = 'etapes';
    protected $primaryKey = 'idetapes';


        public function Projet(){
        return $this->belongsTo(Projet::class,"id_projet","idP");
    }
}
