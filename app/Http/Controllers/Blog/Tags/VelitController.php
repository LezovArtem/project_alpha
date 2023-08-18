<?php

namespace App\Http\Controllers\Blog\Tags;

use App\Http\Controllers\Blog\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class VelitController extends BaseController
{

    public function __invoke()
    {
        $posts = Post::whereHas('tags', function ($post){
            $post->where('tags.id', 5);
        })->get();
        return view('blog.tags.velit', compact('posts'));
    }
}
