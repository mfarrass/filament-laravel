<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * untuk menjalankan migration.
     */
    public function up(): void
    {
        Schema::create('guest_book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * untuk rollback migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_book');
    }
};
