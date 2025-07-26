<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name', 100);
            $table->string('teacher_email', 100);
            $table->string('teacher_phone', 10);
            $table->char('teacher_gender', 2);
            $table->unsignedBigInteger('department'); 
            $table->foreign('department')->references('id')->on('department');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};