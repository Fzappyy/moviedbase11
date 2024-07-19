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
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('mov_id')->primary();
            $table->string('mov_title',50);
            $table->integer('mov_year');
            $table->integer('mov_time');
            $table->string('mov_lang',50);
            $table->date('mov_dt_rel')->nullable();
            $table->string('mov_rel_country',5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
