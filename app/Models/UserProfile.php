<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    
protected $fillable = [
        'user_id',
        'phone',
        'date_of_birth',
        'address',
        'avatar_path',
        'is_verified',
        'last_login_at'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'last_login_at' => 'datetime',
        'is_verified' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
{
    return Storage::url($this->avater_path);
}
}

