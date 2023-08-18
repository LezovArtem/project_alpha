<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{

    public function __invoke(Post $post, Category $category, Tag $tags)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.edit', compact('categories', 'post', 'tags'));
    }
}
