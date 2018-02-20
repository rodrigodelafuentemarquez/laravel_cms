@extends('layouts.blog-home')




@section('content')

    @foreach($post as $post)
        <h2>
            <a href="{{route('home.post', $post->id)}}">{{$post->title}}</a>
        </h2>
        <p class="lead">
            by <a href="index.php">{{$post->user->name}}</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
        <hr>
        <img class="img-responsive" src="{{$post->photo ? $post->photo->file : null}}" alt="">
        <hr>
        <p>{!!str_limit($post->body, 140)!!}</p>
        <a class="btn btn-primary" href="{{route('home.post', $post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    
        <hr>
    @endforeach

@stop


@section('categories')

    @foreach($categories as $category)
        <div class="col-lg-6">
            <li><a href="#">{{$category->name}}</a></li>
        </div>
    @endforeach

@stop