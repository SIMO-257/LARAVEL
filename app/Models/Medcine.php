<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Medcine extends Model
{
    protected $table = 'medcines';

    protected $primaryKey = 'matricule';

    public $timestamps = true;

    protected $fillable = [
        'nom','specialite'
    ];

    public function Patients(){
        return $this->belongsToManyy(Patient::class)
                    ->with(Rendez_vous::class);
    }
}
