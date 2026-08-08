<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }

    /**
     * Helper accessor for SEO Alt Text fallback.
     */
    public function getSeoAltAttribute(): string
    {
        return !empty($this->alt_text) ? $this->alt_text : $this->title;
    }
}
