<?php

namespace App\Models;

use App\Enums\SkillType;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'type' => SkillType::class,
        ];
    }
}
