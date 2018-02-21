@extends('layouts.admin')




@section('content')

@if(Session::has('deleted_post'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_post')}}</li>
        </ul>
    </div>
@endif

    <h1>Posts</h1>

    
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Author</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th>View Post</th>
        </tr>
    </thead>
    <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/300x300'}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id ? $post->category->name : 'Uncategorized'}}</td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
                    <td>{{str_limit($post->body, 30)}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td><a href="{{route('home.post', $post->slug)}}">View</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
        {{$posts->render()}}
    </div>
</div>


@stop