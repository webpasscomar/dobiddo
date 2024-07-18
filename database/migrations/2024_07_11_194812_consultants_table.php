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
    Schema::create('consultants', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('lastname');
      $table->string('email');
      $table->foreignId('nationalityCountry_id')->constrained('countries', 'id');
      $table->foreignId('residenceCountry_id')->constrained('countries', 'id');
      $table->foreignId('education_id')->constrained('educations', 'id');
      $table->integer('experience')->nullable();
      $table->string('linkedin')->nullable();
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
