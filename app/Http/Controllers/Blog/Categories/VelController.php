<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Categories;

use App\Http\Controllers\Blog\Post\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class VelController extends BaseController
{

    public function __invoke(): View
    {
        $posts = Post::all()->where('category_id', '3');
        return view('blog.categories.vel', compact('posts'));
    }
}
