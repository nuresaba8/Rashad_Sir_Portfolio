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
        Schema::create('basis_contributions', function (Blueprint $table) {
            $table->id();
            $table->string('title');             // e.g. "Convener of BASIS Outsourcing Award 2021"
            $table->text('description');         // The details shown under the title
            $table->string('image_path')->nullable();        // Image path, e.g. 'images/xyz.jpg'
            $table->string('category')->nullable(); // web, mobile, ui (optional filtering)
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
