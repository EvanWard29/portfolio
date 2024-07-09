<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->string('name', 50)->primary();
            $table->unsignedInteger('percent');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};