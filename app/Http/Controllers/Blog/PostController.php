<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends BaseController
{

    public function __invoke()
    {
       $posts = Post::paginate(10);
       return view('blog.mainpage', compact('posts'));

    }
}
