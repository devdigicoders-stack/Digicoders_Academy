<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'faqs' => 'array',
            'is_featured' => 'boolean',
            'fee' => 'decimal:2',
        ];
    }
}
