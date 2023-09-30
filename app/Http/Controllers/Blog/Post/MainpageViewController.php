<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Post;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class MainpageViewController extends BaseController
{

    public function __invoke(): View
    {
       $posts = Post::paginate(10);
       return view('blog.mainpage', compact('posts'));
    }
}
