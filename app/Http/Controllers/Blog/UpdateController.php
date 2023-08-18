<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Instanceof_;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request -> validated();
        $this->service->update($post, $data);
        return redirect()->route('posts.show', $post->id);
    }
}
