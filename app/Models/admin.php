<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom',
        'prenom',
        'password',
        'contact',
        'id_utilisateur',
        'id_pocheDeSang',
        'id_banqueDeSang',
    ];
}
