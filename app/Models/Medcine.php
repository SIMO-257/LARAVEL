<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rendez_vous;

class Medcine extends Model
{
    protected $table = 'medcines';

    protected $primaryKey = 'matricule';

    public $timestamps = true;

    protected $fillable = [
        'nom','specialite'
    ];

    public function Rendez_vous(){
        return $this->hasMany(Rendez_vous::class,'matricule','matricule');
    }
}
