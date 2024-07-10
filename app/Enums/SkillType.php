<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum SkillType: string
{
    case Language = 'language';
    case Quality = 'quality';
    case Technical = 'technical';

    /**
     * @return string[]
     */
    public static function values(): array
    {
        return Arr::pluck(self::cases(), 'value');
    }
}
