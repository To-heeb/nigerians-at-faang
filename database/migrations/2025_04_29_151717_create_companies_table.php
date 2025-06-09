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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->index();
            $table->string('slug')->unique();
            $table->text('about');
            $table->year('founded_at');
            $table->string('headquarters');
            $table->string('industry');
            $table->string('website');
            $table->string('information_website');
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('wikipedia_url')->nullable();
            $table->text('logo');
            $table->text('mini_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
