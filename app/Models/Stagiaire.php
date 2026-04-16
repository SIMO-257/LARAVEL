<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $table = 'stagiaires';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nom', 'age', 'email', 'filiere_id',
    ];

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }
}
