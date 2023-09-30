<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Tags;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class VelitController extends BaseController
{

    public function __invoke(): View
    {
        $posts = Post::whereHas('tags', function ($post){
            $post->where('tags.id', 5);
        })->get();
        return view('blog.tags.velit', compact('posts'));
    }
}
