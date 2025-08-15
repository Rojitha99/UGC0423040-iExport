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
        Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('post_title');
        $table->string('category');
        $table->string('place');
        $table->string('company_name');
        $table->string('image');
        $table->string('Description');
        $table->string('price');
        $table->string('contact_number');
        $table->string('more_info_link')->nullable;
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
