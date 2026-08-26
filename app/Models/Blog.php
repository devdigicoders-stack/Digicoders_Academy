<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'faqs' => 'array',
        ];
    }

    /**
     * The tags that belong to the blog.
     */
    public function tags()
    {
        return $this->belongsToMany(BlogTag::class, 'blog_tag', 'blog_id', 'blog_tag_id');
    }

    /**
     * The views logged for this blog.
     */
    public function views()
    {
        return $this->hasMany(BlogView::class, 'blog_id');
    }

    /**
     * Get the route key for the model (uses 'slug' instead of 'id' in URLs).
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
