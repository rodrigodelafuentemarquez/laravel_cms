@extends('layouts.admin')




@section('content')

    <h1>Edit Categories</h1>

    <div class="col-md-6">
        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
            {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::submit('Edit Category', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
            {{csrf_field()}}
            <div class="from-group col-sm-6">
                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger pull-right']) !!}
            </div>
        {!! Form::close() !!}
    
        @include('includes.form_error')
    </div>


@stop