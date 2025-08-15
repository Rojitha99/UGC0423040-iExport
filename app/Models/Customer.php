<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Customer extends Model
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
        'more_info_link',
        'user_id'
        
    ];
    // app/Models/Slide.php
public function getImageUrlAttribute()
{
    return Storage::url($this->image_path);
}

// app/Models/Customer.php
public function payments()
{
    return $this->hasMany(Payment::class);
}



// In Customer.php
public function user()
{
    return $this->belongsTo(User::class);
}
}