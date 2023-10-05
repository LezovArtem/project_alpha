<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Tags;

use App\Http\Controllers\Blog\Post\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class ArgentController extends BaseController
{

    public function __invoke(): View
    {
        $posts = Post::whereHas('tags', function ($post){
            $post->where('tags.id', 10);
        })->get();

        return view('blog.tags.argent', compact('posts'));
    }
}
