<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poche_de_sang extends Model
{
    use HasFactory;

    protected $fillable =[
        'groupe_sanguin',
        'type_produit_sanguin',
    ];
}
