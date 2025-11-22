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
         Schema::create ('users',function (blueprint $table) {
            $table->id();
            $table->string ('name');
            $table->string ('email')->unique();
            $table->string ('password_hash');
            $table->string ('phone_number')->nullable()->unique();
            $table->integer ('role')->default(2);
            $table->string ('created');
            $table->string ('update');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
