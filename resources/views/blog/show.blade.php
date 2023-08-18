@extends('layouts.bloglayout')
@section('content')

    <div>
        <a href="{{route('posts.categories.'. $post->category->title)}}" id="shown_category">{{$post->category->title}}</a>
    </div>
        <div id="shown_post">
            <div>{{$post->id}}. {{$post->title}}</div>
            <div>{{$post->content}}</div>
            <div>Category: <a href="{{route('posts.categories.'. $post->category->title)}}">{{$post->category->title}}</a></div>
            <div>Tags: @foreach($post->tags as $tag)<a href="{{route('posts.tags.'. $tag->title)}}">  {{$tag->title}} </a> @endforeach</div>
            <div id="likes"><i class="nav-icon far fa-solid fa-heart">{{$post->likes}}</i></div>
        </div>
    <div class="section">
        <div class="menu-block">
            <nav class="menu-nav">
                <a href="{{route('posts.create')}}">Create a new post</a>
                <a href="{{route('posts.edit', $post->id)}}">Edit</a>
                <a href="{{route('posts.delete', $post->id)}}" data-method="delete" data-token="{{csrf_token()}}">Delete</a>
                {{--<form action="{{route('posts.delete', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>--}}
            </nav>

            <a href="#" class="menu-btn">
                <span></span>
            </a>

        </div>
    </div>

@endsection
