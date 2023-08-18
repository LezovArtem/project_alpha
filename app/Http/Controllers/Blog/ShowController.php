<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends BaseController
{

    public function __invoke(Post $post, Category $category, Tag $tags)
    {
        return view('blog.show', compact('post', 'category', 'tags'));
    }
}
