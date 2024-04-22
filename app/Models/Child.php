<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname', 'lastname','activities','dateofbirth','filename','gender','allergies','conditions','message','username',
        'phone','email','password','frais',
    ];
}
