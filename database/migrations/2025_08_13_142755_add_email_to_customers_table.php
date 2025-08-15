<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->boolean('urgent')->nullable()->after('contact_number');
            // This will add the email column after phone_number
            // ->nullable() allows NULL values
        });
    }

    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('urgent');
            // This will remove the column if migration is rolled back
        });
    }
};