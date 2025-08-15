<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'base_fee',
        'urgent_fee',
        'total_amount',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
