@extends('layouts.admin')




@section('content')

@if(Session::has('deleted_page'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_page')}}</li>
        </ul>
    </div>
@endif

    <h1>Pages</h1>

    @if($pages)

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>URL</th>
                    <th>Created</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{$page->name}}</td>
                        <td>{{$page->slug}}</td>
                        <td>{{$page->created_at}}</td>
                        <td><a href="{{route('admin.pages.edit', $page->id)}}" class="btn btn-primary">Editar Página</a></td>
                        <td><a href="{{route('admin.pages.editTemplate', $page->id)}}" class="btn btn-primary">Editar Plantilla</a></td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>

    @endif

@stop