@extends('layouts.admin')




@section('content')

@if(Session::has('deleted_category'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_category')}}</li>
        </ul>
    </div>
@endif

    <h1>Categories</h1>

    <div class="col-md-6">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
            {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    
        @include('includes.form_error')
    </div>

    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created date</th>
                </tr>
            </thead>
            <tbody>
                @if($categories)
                    @foreach($categories as $category)
                        <tr> 
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                            <td>{{$category->created_at ? $category->created_at : 'no date'}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>


@stop