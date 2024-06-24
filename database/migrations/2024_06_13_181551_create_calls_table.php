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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('resume');
            $table->text('content')->nullable();
            $table->string('link');
            $table->date('expiration')->nullable();
            $table->boolean('extended')->nullable();  
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('institution_id')->constrained('institutions');
            $table->foreignId('dedication_id')->constrained('dedications'); //puede ser nullable
            $table->foreignId('duration_id')->constrained('durations'); //puede ser nullable
            $table->foreignId('format_id')->constrained('formats'); //puede ser nullable
            $table->string('comment')->nullable();
            $table->date('publish')->nullable();
            $table->date('unpublish')->nullable();
            $table->foreignId('state_id')->constrained('states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls');
    }
};
