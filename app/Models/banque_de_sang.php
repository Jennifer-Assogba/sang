<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banque_de_sang extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom',
        'contact',
        'adresse',
        'ville',
    ];
}
