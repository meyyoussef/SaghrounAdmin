<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'description',
        'status',
        'user_id',
        // Ajoutez d'autres attributs au besoin
    ];

    // Relation avec l'utilisateur (si chaque réclamation est liée à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
