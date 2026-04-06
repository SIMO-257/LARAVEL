<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Rendez_vous extends Pivot
{
    protected $table = 'rendez_vous';

    protected $primaryKeys = ['date_rdv'];

    public $timestamps = true;

    protected $fillable = [
        'num_dossier',
        'matricule',
        'heure_rdv',
        'date_rdv'
    ];

}
