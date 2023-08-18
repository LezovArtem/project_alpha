<?php

namespace App\Http\Controllers\Blog\Categories;

use App\Http\Controllers\Blog\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PlaceatController extends BaseController
{

    public function __invoke()
    {
        $posts = Post::all()->where('category_id', '2');
        return view('blog.categories.placeat', compact('posts'));
    }
}
