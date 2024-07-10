<?php

use App\Enums\SkillType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->enum('type', SkillType::values());
            $table->mediumText('description');
            $table->integer('percent')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
