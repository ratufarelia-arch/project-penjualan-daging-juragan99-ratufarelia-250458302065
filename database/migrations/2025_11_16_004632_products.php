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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // category_id (int, NN, Linked)
            // Menggunakan foreignId untuk relasi, asumsikan tabel 'categories' ada
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            // weight_id (int, Nullable, Linked)
            $table->foreignId('weight_id')->nullable()->constrained('weights')->nullOnDelete();

            // cut_id (int, Nullable, Linked)
            $table->foreignId('cut_id')->nullable()->constrained('cuts')->nullOnDelete();

            // name (varchar 255, NN)
            $table->string('name');

            // slug (varchar 255, NN)
            $table->string('slug')->unique(); // Biasanya slug dibuat unique

            // description (text, Nullable)
            $table->text('description')->nullable();

            // cooking_tips (text, Nullable)
            $table->text('cooking_tips')->nullable();

            // price (varchar 255, NN)
            // Catatan: Di gambar tipenya varchar, tapi saya sarankan decimal/integer untuk uang.
            $table->string('price'); 

            // stock (int, NN)
            $table->integer('stock');

            // main_image_url (varchar 255, Nullable)
            $table->string('main_image_url')->nullable();

            // is_active (boolean, NN)
            $table->boolean('is_active')->default(true);

            // created_at & updated_at (timestamp, NN)
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
