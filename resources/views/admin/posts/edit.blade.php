@extends('layouts.admin')




@section('content')

    @include('includes.tinyeditor')

    <h1>Edit Posts</h1>

    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : null}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">

        {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
            {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::submit('Edit Post', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
            {{csrf_field()}}
            <div class="from-group col-sm-6">
                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger pull-right']) !!}
            </div>
        {!! Form::close() !!}

    </div>

    <div class="col-sm-12">
        @include('includes.form_error')
    </div>


@stop