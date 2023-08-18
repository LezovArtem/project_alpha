@extends('layouts.bloglayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editing '{{$post->title}}'</h1>
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="title">Title</label><br>
            <input value="{{$post->title}}" name="title" type="text" class="form-control" id="title" placeholder="Title">
            @error('title')
            <p class="text-danger" >{{$message}}</p>
            @enderror
        </div><br>
        <div class="form-group">
            <label for="content">Content</label><br>
            <input value="{{$post->content}}" name="content" type="text" class="form-control" id="content" placeholder="Content">

            @error('content')
            <p class="text-danger" >{{$message}}</p>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id == $post->category->id ? ' selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}
                    </option>
                @endforeach
            </select>
        </div><br>

        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                            {{ $tag->id == $postTag->id ? ' selected' : ''}}
                        @endforeach
                        value="{{$tag->id}}">{{$tag->id}} . {{$tag->title}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
