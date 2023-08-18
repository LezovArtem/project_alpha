@extends('layouts.bloglayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ut</h1>
                </div>
            </div>
        </div>
    </div>


    @foreach($posts as $post)
        <div id="post">
            <div><a href="{{route('posts.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
        </div>
    @endforeach
@endsection