<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class oldPost
{

    public $title;

    public $excerpt;
    public $date;
    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all()
    {
        //caching, collections and composer packages in this example below;
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts/")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(
                    fn($document) => new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug
                    )
                )
                ->sortByDesc('date');
        });


    }
    public static function find($slug)
    {
        //of all the blog posts, find the one with slug that matches.
        $post = static::all()->firstWhere('slug', $slug);

        if (!$post) {
            throw new ModelNotFoundException();
        } else
            return $post;
    }

}