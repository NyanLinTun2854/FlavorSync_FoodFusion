<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('community_comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->longText('body');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->uuid('post_id');
            $table->foreign('post_id')->references('id')->on('community_posts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_comments');
    }
};
