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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the menu
            $table->enum('type', ['link', 'category', 'static_content']); // Type of source (link, category, static content)
            $table->string('url')->nullable(); // URL for 'link' type menus
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // For 'category' type menus
            $table->text('static_content')->nullable(); // For 'static_content' type menus
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade'); // For submenus (self-referencing)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
