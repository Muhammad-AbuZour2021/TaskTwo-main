<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Plan; // ✅ مهم جداً

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم الباقة
            $table->string('badge')->nullable(); // مبتدئ - الأكثر شيوعاً
            $table->decimal('price', 8, 2)->nullable(); // السعر
            $table->string('period')->nullable(); // شهرياً / مخصص
            $table->text('description')->nullable(); // وصف
            $table->boolean('is_popular')->default(false); // مميزة
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
