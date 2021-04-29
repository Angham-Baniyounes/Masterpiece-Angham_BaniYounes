<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'image',
    ];
    protected $hidden = ['password', 'remember_token',];
    protected $table = 'admins';
    protected $primaryKey = 'id';

    public function path() {
        return route('admin.show', $this);
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new AdminResetPasswordNotification($token));
    }
}