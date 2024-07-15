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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('lastname');
            $table->text('email');
            $table->foreignId('nationality')->constrained('countries');
            $table->foreignId('residence')->constrained('countries');
            $table->foreignId('education')->constrained('educations');
            $table->integer('experience')->nullable();
            $table->string('Linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};
