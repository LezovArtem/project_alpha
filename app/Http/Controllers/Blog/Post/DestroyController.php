<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog;

use Illuminate\Http\RedirectResponse;
use App\Models\Post;

final class DestroyController extends BaseController
{

    public function __invoke(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
