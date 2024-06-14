<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Utilisateur extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, Authenticatable;

    // Spécifiez le nom de la table si ce n'est pas le pluriel du nom du modèle
    protected $table = 'utilisateurs';

    // Spécifiez la clé primaire
    protected $primaryKey = 'id_utilisateur';

    // Spécifiez les attributs remplissables
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'contact',
        'email',
        'ville',
        'password',
        'active',
        'role', // Ajoutez cette ligne si ce n'est pas déjà fait
    ];


    
    public function getAuthIdentifierName()
    {
        return 'id'; // Nom de la colonne qui identifie l'utilisateur (généralement 'id')
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Valeur de l'identifiant de l'utilisateur
    }

    public function getAuthPassword()
    {
        return $this->password; // Retourne le mot de passe de l'utilisateur
    }

    // Les autres méthodes

    public function getRememberToken()
    {
        return $this->remember_token; // Retourne le jeton de rappel de l'utilisateur
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Définit le jeton de rappel de l'utilisateur
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Nom de la colonne de rappel de l'utilisateur (généralement 'remember_token')
    }
}
