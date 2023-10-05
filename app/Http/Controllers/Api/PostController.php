<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Blog\Post\BaseController;
use App\Http\Requests\PostApi\StoreRequest;
use App\Http\Requests\PostApi\UpdateRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostResource::collection(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $post = $this->service->apiStore($data);

        return $post instanceof Post ? new PostResource($post) : $post;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new PostResource(Post::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $data = $request -> validated();

        $post = Post::find($id);

        $post = $this->service->apiUpdate($post, $data);

        return $post instanceof Post ? new PostResource($post) : $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        if($post)
            $post->delete();
        else
            echo "loh";
        return response()->json(null);
    }
}
