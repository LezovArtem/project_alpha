@extends('layouts.bloglayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Posts. Admin</h1>
                </div>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
    <div id="post">
        <a href="{{route('posts.show', $post->id)}}"><div>{{$post->id}}. {{$post->title}}</div></a>
    </div>
    @endforeach

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Users</h2>
                </div>
            </div>
        </div>
    </div>
    @foreach($users as $user)
        <div id="post">
            {{$user->id}}. {{$user->name}}. {{$user->role}}
        </div>
    @endforeach


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Posts {{$count}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Likes {{$total}}</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0">Average Likes per Post {{$averageLikes}}</h2>
                </div>
            </div>
        </div>
    </div>


@endsection
