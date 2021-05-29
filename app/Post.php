<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function show_popular_posts()
    {
        $posts = Post::orderBy('views', 'DESC')
            ->limit(3)
            ->get();

        return $posts;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
