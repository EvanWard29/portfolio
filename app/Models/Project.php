<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;

    public $incrementing = false;
    public $keyType = 'string';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'languages' => 'array',
        ];
    }
}
