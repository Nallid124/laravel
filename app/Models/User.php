<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les colonnes pouvant être remplies automatiquement.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'password',
        'phone_number',  // Ajout du champ phone_number
    ];

    /**
     * Désactive les timestamps (si ta table ne contient pas "created_at" et "updated_at").
     * Si tu veux utiliser les timestamps, tu peux laisser cette ligne commentée ou la supprimer.
     */
    public $timestamps = true;  // Active les timestamps, si tes colonnes existent dans la BD

    /**
     * Si tu n'as pas de colonnes "created_at" et "updated_at" dans la base de données, laisse le à false.
     * Sinon, laisse à true pour que Laravel gère automatiquement ces champs.
     */
}
