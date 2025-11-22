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
         Schema::create('articles', function (Blueprint $table) {
            // id (int)
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('weight_id')->nullable()->constrained('weights')->nullOnDelete();
            $table->foreignId('cut_id')->nullable()->constrained('cuts')->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique(); 
            $table->text('description')->nullable();
            $table->text('cooking_tips')->nullable();
            $table->string('price'); 
            $table->integer('stock');
            $table->string('main_image_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
