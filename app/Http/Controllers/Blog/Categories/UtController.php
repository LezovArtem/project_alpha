<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Categories;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class UtController extends BaseController
{

    public function __invoke(): View
    {
       $posts = Post::all()->where('category_id', '1');
       return view('blog.categories.ut', compact('posts'));
    }
}
