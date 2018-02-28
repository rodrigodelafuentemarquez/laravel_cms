@extends('layouts.admin')




@section('content')

    <h1>Crear Página</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPagesController@store']) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'URL:') !!}
            {!! Form::text('slug', null, ['class'=>'form-control']) !!}
        </div>
        {{--  <div class="form-group">
            {!! Form::label('parent', 'Pertenece a:') !!}
            {!! Form::select('parent', [''=>'Elige'] + $parents, null, ['class'=>'form-control']) !!}
        </div>  --}}
        <div class="form-group">
            {!! Form::label('template', 'Plantilla:') !!}
            {!! Form::select('template', [''=>'Elige'] + $templates, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Crear Página', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('includes.form_error')

@stop