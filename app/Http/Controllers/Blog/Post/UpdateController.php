<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Post;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Post $post): RedirectResponse
    {
        $data = $request -> validated();

        $this->service->update($post, $data);

        return redirect()->route('posts.show', $post->id);
    }
}
