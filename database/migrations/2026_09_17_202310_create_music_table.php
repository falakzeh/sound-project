<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->foreignId('artist_id')
                  ->constrained('artists')
                  ->onDelete('cascade');

            $table->foreignId('album_id')
                  ->constrained('albums')
                  ->onDelete('cascade');

            $table->year('year')->nullable();

            $table->string('genre')->nullable();

            $table->string('language')->nullable();

            $table->string('image')->nullable();

            $table->text('description')->nullable();

            $table->timestamps();
        });
    }
public function down(): void
    {
        Schema::dropIfExists('music');
    }
};