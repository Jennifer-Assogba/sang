<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livraison extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_utilisateur',
        'id_pocheDeSang',
    ];
}
