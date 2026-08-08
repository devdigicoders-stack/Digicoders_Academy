<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    /**
     * The tags that belong to the blog.
     */
    public function tags()
    {
        return $this->belongsToMany(BlogTag::class, 'blog_tag', 'blog_id', 'blog_tag_id');
    }

    /**
     * Get the route key for the model (uses 'slug' instead of 'id' in URLs).
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
