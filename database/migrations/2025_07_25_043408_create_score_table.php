<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('score', function (Blueprint $table) {
            $table->unsignedBigInteger('subject'); 
            $table->foreign('subject')->references('id')->on('subject');
            $table->unsignedBigInteger('teacher'); 
            $table->foreign('teacher')->references('id')->on('teacher');
            $table->unsignedBigInteger('student'); 
            $table->foreign('student')->references('id')->on('student');
            $table->float('score1');
            $table->float('score2');
            $table->float('score3');
            $table->float('final_score');
            $table->char('state', 1);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('score');
    }
};
