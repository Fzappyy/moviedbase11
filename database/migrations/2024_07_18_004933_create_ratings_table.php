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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('mov_id');
            $table->integer('rev_id');
            $table->integer('rev_stars');
            $table->integer('num_o_ratings');
            $table->foreign('mov_id')->references('mov_id')->on('movies')->onDelete('cascade');
            $table->foreign('rev_id')->references('rev_id')->on('reviewers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
