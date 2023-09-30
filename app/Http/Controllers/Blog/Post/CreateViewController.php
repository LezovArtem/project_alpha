<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Post;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\View\View;

final class CreateViewController extends BaseController
{

    public function __invoke(): View
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.create', compact('categories', 'tags'));
    }
}
