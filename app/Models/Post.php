<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    protected $fillable = [
        
        'post_title',
        'category',
        'product_category',
        'place',
        'company_name',
        'image',
        'Description',
        'quantity',
        'price',
        'contact_number',
        'urgent',
        'more_info_link'
        
    ];
    // app/Models/Slide.php
public function getImageUrlAttribute()
{
    return Storage::url($this->image_path);
}
public function user()
{
    return $this->belongsTo(User::class);
}
}


