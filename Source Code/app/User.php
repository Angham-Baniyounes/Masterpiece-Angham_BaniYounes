<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 
        'email', 
        'user_mobile', 
        'user_image', 
        'user_address',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
    protected $perPage = 10;

    public function feedbacks() {
        return $this->hasMany(Feedback::class);
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
