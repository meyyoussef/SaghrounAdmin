<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $fillable = [
        'email', 'token', 'created_at'
    ];

    // Indiquer que la colonne 'created_at' n'est pas de type timestamp
    public $timestamps = false;
}
