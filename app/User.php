<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname', 'surname', 'email', 'email_verified_at', 'password', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the user's full name
     * 
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->surname}";
    }

    /**
     * The gear that belongs to the user
     */
    public function gear()
    {
        return $this->belongsToMany('App\Models\Gear')->withPivot('quantity');
    }
}
