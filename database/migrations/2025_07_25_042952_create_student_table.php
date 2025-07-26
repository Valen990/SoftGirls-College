<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('student_name', 100);
            $table->char('student_gender', 2);
            $table->integer('student_age');
            $table->string('student_email', 100);
            $table->string('student_phone', 10);
            $table->unsignedBigInteger('program'); 
            $table->foreign('program')->references('id')->on('program');
            $table->unsignedBigInteger('neighborhood'); 
            $table->foreign('neighborhood')->references('id')->on('neighborhood');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};