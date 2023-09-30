<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;

final class EditController extends BaseController
{

    public function __invoke(Post $post, Category $category, Tag $tags): View
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.edit', compact('categories', 'post', 'tags'));
    }
}
