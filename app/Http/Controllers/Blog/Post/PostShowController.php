<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;

final class PostShowController extends BaseController
{

    public function __invoke(Post $post, Category $category, Tag $tags): View
    {
        return view('blog.show', compact('post', 'category', 'tags'));
    }
}
