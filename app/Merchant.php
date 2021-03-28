<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Merchant extends Model
{
    use Notifiable;
    // protected $guard = 'vadmin';
    protected $table = 'merchants';
    protected $fillable = ['phone_number', 'first_name', 'last_name','email','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 
}
