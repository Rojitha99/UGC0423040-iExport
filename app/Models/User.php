<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;
    

public function customers()
{
    return $this->hasMany(Customer::class);
}
public function addedCustomer()
{
    return $this->hasMany(Customer::class, 'user_id');
}

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile?->avatar_url ?? asset('images/default-avatar.jpg');
    }
}
