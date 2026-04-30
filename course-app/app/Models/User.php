<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Atributos asignables en masa
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atributos ocultos en serialización
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts automáticos
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Laravel moderno
    ];
}