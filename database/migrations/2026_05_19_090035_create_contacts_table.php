<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');      // الاسم الأول
            $table->string('last_name');       // اسم العائلة
            $table->string('email');           // البريد الإلكتروني
            $table->string('phone')->nullable(); // رقم الهاتف
            $table->string('clinic_name')->nullable(); // اسم العيادة
            $table->string('role')->nullable();        // الدور في العيادة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
