<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Registrationmodel extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $table = 'user';
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'password',
        'email', 
        'phone',
        'address',
        'city',
        'state', 
    ];
}