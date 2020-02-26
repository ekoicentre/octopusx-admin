<?php

namespace App;

use App\Models\Access;
use App\Models\Data;
use App\Models\Domain;
use App\Models\Profile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function access(){
        return $this->hasMany(Access::class);
    }

    public function domain(){
        return $this->hasMany(Domain::class);
    }

    public function data(){
        return $this->hasMany(Data::class);
    }

    public function profile(){
        return $this->hasMany(Profile::class,'user_id');
    }
}
