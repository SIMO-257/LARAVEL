<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    protected $table = "users";
    protected $primary = "id";
    protected $fillable = ["nom","email","password"];
}
