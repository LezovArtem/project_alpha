@extends('layouts.bloglayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Posts</h1>
                </div>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
    <div id="post">
        <a href="{{route('posts.show', $post->id)}}"><div>{{$post->id}}. {{$post->title}}</div></a>
    </div>
    @endforeach
        <div>
            {{$posts->links()}}
        </div>

    <div class="section">
        <div class="menu-block">
            <a href="{{route('posts.create')}}" class="mainpage-menu-btn">
               <span></span>
            </a>

        </div>
    </div>

@endsection
