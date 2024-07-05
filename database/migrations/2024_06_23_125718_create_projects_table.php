<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('title');
            $table->mediumText('description');
            $table->json('links')->nullable()->comment('Relevant project links');
            $table->json('languages');
            $table->string('year');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
