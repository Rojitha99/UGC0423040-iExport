<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'button_text',
        'button_link',
        'order',
        'is_active'
    ];
    // app/Models/Slide.php
public function getImageUrlAttribute()
{
    return Storage::url($this->image_path);
}
}
