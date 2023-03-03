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
        Schema::create('requests', function (Blueprint $table) {
            // Request ID;
            $table->id();
            // Client ID;
            $table->unsignedBigInteger('client_id');
            // Request title;
            $table->string('title');
            // Request text;
            $table->text('content');
            // File link;
            $table->string('file_link');
            // Creation date;
            $table->timestamps();
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
