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
        Schema::create('call_sector', function (Blueprint $table) {
            $table->id();     
            $table->unsignedBigInteger('call_id');
            $table->unsignedBigInteger('sector_id');
         
            $table->foreign('call_id')->references('id')->on('calls');  
            $table->foreign('sector_id')->references('id')->on('sectors');
        
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_sector');
    }
};
