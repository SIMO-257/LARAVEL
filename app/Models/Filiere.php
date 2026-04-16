<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $table = 'filieres';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nom_filiere',
    ];

    public function stagiaires(){
        return $this->hasMany(Stagiaire::class);
    }
}
