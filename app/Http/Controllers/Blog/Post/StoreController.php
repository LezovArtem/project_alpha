<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('posts.show', $post->id);
    }
}
