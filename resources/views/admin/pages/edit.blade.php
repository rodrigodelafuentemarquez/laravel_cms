@extends('layouts.admin')




@section('content')

    <h1>Editar página</h1>

    {!! Form::model($page, ['method'=>'PATCH', 'action'=>['AdminPagesController@update', $page->id], 'files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'URL:') !!}
            {!! Form::text('slug', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('template', 'Plantilla:') !!}
            {!! Form::select('template', [''=>'Elige'] + $templates, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Página', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPagesController@destroy', $page->id]]) !!}
        {{csrf_field()}}
        <div class="from-group col-sm-6">
            {!! Form::submit('Borrar Página', ['class'=>'btn btn-danger pull-right']) !!}
        </div>
    {!! Form::close() !!}

    @include('includes.form_error')


@stop