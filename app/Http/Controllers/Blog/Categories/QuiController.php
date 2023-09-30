<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Categories;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class QuiController extends BaseController
{

    public function __invoke():View
    {
        $posts = Post::all()->where('category_id', '4');
        return view('blog.categories.qui', compact('posts'));
    }
}
