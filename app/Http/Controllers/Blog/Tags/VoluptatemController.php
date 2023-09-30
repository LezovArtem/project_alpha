<?php

namespace App\Http\Controllers\Blog\Tags;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class VoluptatemController extends BaseController
{

    public function __invoke(): View
    {
        $posts = Post::whereHas('tags', function ($post){
            $post->where('tags.id', 1);
        })->get();
        return view('blog.tags.voluptatem', compact('posts'));
    }
}
