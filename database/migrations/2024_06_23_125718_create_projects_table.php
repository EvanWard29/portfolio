<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->string('thumbnail_url');
            $table->string('repository_link');
            $table->json('languages');
            $table->string('year');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
