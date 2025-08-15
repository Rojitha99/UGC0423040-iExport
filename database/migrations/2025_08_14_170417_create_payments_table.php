<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            
        $table->id();
        $table->foreignId('customer_id')->constrained();
        $table->decimal('base_fee', 10, 2)->default(500.00);
        $table->decimal('urgent_fee', 10, 2)->default(0.00);
        $table->decimal('total_amount', 10, 2);
        $table->string('status')->default('pending');
        $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
