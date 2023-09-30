<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Models\User;

class AdminController extends BaseController
{

    public function __invoke(){
       $total = 0;

       $posts = Post::all();
       $users = User::all();

       $count = count($posts);

       foreach ($posts as $post){
           $likes = $post->likes;
           $total += $likes;
       }
       $averageLikes = round($total/$count);

       return view('admin.mainpage', compact('posts', 'users', 'total', 'count', 'averageLikes'));


    }
}
