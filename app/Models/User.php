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
    ];

    /**
     * Désactive les timestamps (si ta table ne contient pas "created_at" et "updated_at").
     */
    public $timestamps = false;
}
