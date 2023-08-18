<?php

namespace App\Http\Controllers\Blog\Categories;

use App\Http\Controllers\Blog\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NisiController extends BaseController
{

    public function __invoke()
    {
        $posts = Post::all()->where('category_id', '5');
        return view('blog.categories.nisi', compact('posts'));
    }
}
