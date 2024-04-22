<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends  Authenticatable
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'nic','firstname', 'lastname','phone','address','email','dateofbirth','password','confirmpassword','gender','status','type_degree','languages','filename','imagename','salary'
    ];

}
