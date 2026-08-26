<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogView extends Model
{
    use HasFactory;

    protected $table = 'blog_views';

    protected $fillable = [
        'blog_id',
        'ip_address',
        'user_agent',
        'referer',
    ];

    /**
     * Relationship with Blog model.
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
