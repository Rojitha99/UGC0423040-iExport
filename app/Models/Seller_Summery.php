<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_Summery extends Model
{
    use HasFactory;

    protected $fillable = [
        'verified_sellers',
        'countries_served',
        'districts_covered',
        'annual_exports',
        
        
    ];
}
