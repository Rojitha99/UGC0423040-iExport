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
        Schema::create('seller__summeries', function (Blueprint $table) {
            $table->id();
            $table->string('verified_sellers');
            $table->string('countries_served');
            $table->string('districts_covered');
            $table->string('annual_exports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller__summeries');
    }
};
