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
        Schema::create('static-content', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Title of the static content (e.g., "About Us", "Contact")
            $table->string('slug')->unique(); // URL-friendly version of the title
            $table->text('content'); // The main body content of the static page
            $table->string('image')->nullable(); // Optional image field for static content
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Status of the content
            $table->timestamps(); // Laravel's created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('static_contents');
    }
};
