<?php

namespace App\Services\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Exception;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data){

        try {
            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            $post = Post::create($data);

            $post->tags()->attach($tags);

            DB::commit();
        } catch (\Exception $exception)
        {
            return $exception->getMessage();

            DB::rollBack();
        }

        return $post;
    }

    public function update($post, $data){
        try {
            DB::beginTransaction();
            $tags = $data['tags'];
            unset($data['tags']);


            $post->update($data);
            $post->tags()->sync($tags);

            DB::commit();
        } catch(Exception $exception){
            return $exception->getMessage();
            DB::rollBack();
        }
        return $post->fresh();
    }

    public function apiStore($data){

        try {
            DB::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);

            $data['category_id'] = $this->getCategoryIds($category);
            $tagIds = $this->getTagIds($tags);

            $post = Post::create($data);
            $post->tags()->attach($tagIds);
            DB::commit();
        } catch (\Exception $exception){

            return $exception->getMessage();
            DB::rollBack();
        }

        return $post;
    }

    public function apiUpdate($post, $data){
        try {
            DB::beginTransaction();
            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);


            $data['category_id'] = $this->getUpdatedCategoryIds($category);
            $tagIds = $this->getUpdatedTagIds($tags);


            $post->update($data);
            $post->tags()->sync($tagIds);
            DB::commit();
        } catch(Exception $exception){
            return $exception->getMessage();
            DB::rollBack();
        }
        return $post->fresh();
    }

    private function getTagIds($tags){
        $tagIds = [];

        foreach ($tags as $tag){
            $tag = !isset($tag['id']) ? Tag::create($tag) : Tag::find($tag['id']);
            $tagIds[] = $tag->id;
        }

        return $tagIds ;
    }

    private function getCategoryIds($item){
        $category = !isset($item['id']) ? Category::create($item) : Category::find($item['id']);
        return $category->id;
    }

    private function getUpdatedTagIds($tags){
        $tagIds = [];

        foreach ($tags as $tag){
            if (!isset($tag['id'])){
                $tag = Tag::create($tag);
            }else{
                $currentTag = Tag::find($tag['id']);
                $currentTag->update($tag);
                $tag = $currentTag->fresh();
            }
            $tagIds[] = $tag->id;
        }
        return $tagIds  ;
    }

    private function getUpdatedCategoryIds($item){
        if(!isset($item['id'])){
            $category = Category::create($item);
        } else {
            $category = Category::find($item['id']);
            $category->update($item);
            $category = $category->fresh();
        }
        return $category->id;
    }


}
