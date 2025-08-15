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
        Schema::create('user_profiles', function (Blueprint $table) {
            // database/migrations/xxxx_create_user_profiles_table.php

    $table->id();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->string('phone')->nullable();
    $table->date('date_of_birth')->nullable();
    $table->text('address')->nullable();
    $table->string('avatar_path')->nullable();
    $table->boolean('is_verified')->default(false);
    $table->timestamp('last_login_at')->nullable();
    $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
