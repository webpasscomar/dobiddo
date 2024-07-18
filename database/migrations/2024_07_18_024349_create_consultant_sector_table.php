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
    Schema::create('consultant_sector', function (Blueprint $table) {
      $table->id();
      $table->foreignId('consultant_id')->constrained('consultants', 'id');
      $table->foreignId('sector_id')->constrained('sectors', 'id');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('consultant_sector');
  }
};
