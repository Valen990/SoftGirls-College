<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('neighborhood', function (Blueprint $table) {
            $table->id();
            $table->string('neighborhood_name', 100);
            $table->unsignedBigInteger('commune'); 
            $table->foreign('commune')->references('id')->on('commune');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('neighborhood');
    }
};