<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
        'button_name',
        'image',
        'more_info_link',
        
    ];
    // app/Models/Slide.php
public function getImageUrlAttribute()
{
    return Storage::url($this->image_path);
}
}
