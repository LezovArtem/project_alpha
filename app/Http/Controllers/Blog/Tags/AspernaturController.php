<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Tags;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class AspernaturController extends BaseController
{

    public function __invoke(): View
    {
        $posts = Post::whereHas('tags', function ($post){
            $post->where('tags.id', 4);
        })->get();

        return view('blog.tags.aspernatur', compact('posts'));
    }
}
