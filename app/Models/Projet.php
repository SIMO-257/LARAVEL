<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = 'projets';
    protected $primaryKey = 'idP';

    public function Etape(){
        return $this->hasMany(Etape::class,"id_projet","idP");
    }
}
