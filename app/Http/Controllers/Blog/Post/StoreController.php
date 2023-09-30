<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog\Post;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\RedirectResponse;

final class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $post = $this->service->store($data);

        return redirect()->route('posts.show', $post->id);
    }
}
