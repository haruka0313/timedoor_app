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
       Schema::create('booklist', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('category_name');
            $table->string('author_name');
            $table->decimal('average_rating', 5, 2);
            $table->integer('voter');
            $table->timestamps();
            $table->index(['book_name', 'author_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booklist');
    }
};
