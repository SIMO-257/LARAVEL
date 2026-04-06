<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
       
    protected $table = 'patients';

    protected $primaryKey = 'num_dossier';

    public $timestamps = true;

    protected $fillable = [
        'nom','prenom','groupe_sanguin'
    ];

    public function Medcines(){
        return $this->belongsToMany(Medcine::class)
                    ->with(Rendez_vous::class);
    }
}

