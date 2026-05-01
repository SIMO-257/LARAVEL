<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roman extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ["titre","auteur","prix","annee","couverture","numd"];

    public function auteur(){
        return $this->belongsTo(Auteur::class,"auteur","idaut");
    }

    public function editeur(){
        return $this->belongsTo(Editeur::class,"numd","num");
    }
}
