<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Medcine;
use App\Models\Patient;

class Rendez_vous extends Model
{
    protected $table = 'rendez_vous';

    protected $primaryKeys = ['num_dossier', 'matricule', 'date_rdv'];

    public $timestamps = true;

    protected $fillable = [
        'heure_rdv','date_rdv'
    ];

    public function Medcine(){
        return $this->hasOne(Medcine::class,'matricule','matricule');
    }

    public function Patient(){
        return $this->hasOne(Patient::class,'num_dossier','num_dossier');
    }
}
