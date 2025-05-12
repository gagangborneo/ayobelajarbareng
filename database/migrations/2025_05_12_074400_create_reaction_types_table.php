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
        Schema::create('reaction_types', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g. like, dislike, love, etc.
            $table->string('icon')->nullable(); // emoji or image path
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reaction_types');
    }
};
