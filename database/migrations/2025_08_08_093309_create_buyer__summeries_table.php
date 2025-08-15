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
        Schema::create('buyer__summeries', function (Blueprint $table) {
            $table->id();
            $table->string('verified_exporters');
            $table->string('product_categories');
            $table->string('monthly_transactions');
            $table->string('avg_response_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer__summeries');
    }
};
