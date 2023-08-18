<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Blog\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

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
