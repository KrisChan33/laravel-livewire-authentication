<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $username, $password;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'users';
    // protected $connection='mysql';

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password','remember_token'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
?>