<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer_Summery extends Model
{
    use HasFactory;

    protected $fillable = [
        'verified_exporters',
        'product_categories',
        'monthly_transactions',
        'avg_response_time',
        
        
    ];
}
