<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rendez_vous;

class Patient extends Model
{
       
    protected $table = 'patients';

    protected $primaryKey = 'num_dossier';

    public $timestamps = true;

    protected $fillable = [
        'nom','prenom','groupe_sanguin'
    ];

    public function Rendez_vous(){
        return $this->hasMany(Rendez_vous::class,'num_dossier','num_dossier');
    }
}

