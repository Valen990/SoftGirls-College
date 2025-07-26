<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('department_name', 200);
            $table->unsignedBigInteger('faculty'); 
            $table->foreign('faculty')->references('id')->on('faculty');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};
