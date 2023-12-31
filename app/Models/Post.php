<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //use $query->when() method


        $query->when($filters['search'] ?? false, function ($query, $searchTerm) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('body', 'like', '%' . $searchTerm . '%');
            });
        });


        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query
                ->whereHas('category', fn($query) =>
                    $query->where('slug', $category)));

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query
                ->whereHas('author', fn($query) =>
                    $query->where('username', $author)));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}