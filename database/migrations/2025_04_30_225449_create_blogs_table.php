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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('body');
            $table->string('image');
            $table->string('author')->nullable()->default(config('app.author'));
            $table->string('submitted_by')->nullable();
            $table->unsignedInteger('views')->default(0)->index();
            $table->foreignId('profile_id')->nullable()->constrained()->onDelete('cascade');
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamp('featured_at')->nullable();
            $table->timestamp('last_featured_at')->nullable();
            $table->timestamps();

            $table->fullText(['title', 'body']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
