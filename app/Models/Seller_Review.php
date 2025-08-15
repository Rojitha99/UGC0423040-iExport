<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'stars',
        'comment',
        'image',
        'name',
        'company',
        
    ];

    public function getImageUrlAttribute()
{
    return Storage::url($this->image_path);
}
}
