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
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Title of the article
            $table->string('slug')->unique(); // URL-friendly version of the title
            $table->text('content'); // Main content of the article
            $table->string('excerpt')->nullable(); // Short preview or summary of the article
            $table->unsignedBigInteger('user_id'); // Foreign key for the article's author (users table)
            $table->unsignedBigInteger('categorie_id')->nullable(); // Foreign key for the category (optional)
            $table->string('image')->nullable(); // Image URL or path (optional)
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Article status
            $table->timestamp('published_at')->nullable(); // Timestamp for when the article was published
            $table->string('meta_title')->nullable(); // Meta title for SEO
            $table->text('meta_description')->nullable(); // Meta description for SEO
            $table->text('tag_id')->nullable();
            $table->timestamps(); // Laravel's created_at and updated_at columns
            $table->softDeletes(); // Soft delete column (nullable)
            $table->boolean('featured')->default(0);
            // Foreign key constraints (optional, if you have users and categories tables)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
