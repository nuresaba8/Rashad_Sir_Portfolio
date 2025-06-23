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
        Schema::create('tvshows', function (Blueprint $table) {
            $table->id();
            $table->string('category', 50);
            $table->string('image_url', 255);
            $table->text('title');
            $table->string('source', 100);
            $table->date('publication_date');
            $table->string('article_url', 255);
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
