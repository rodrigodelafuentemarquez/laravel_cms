@extends('layouts.admin')




@section('content')

@if(Session::has('deleted_photo'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_photo')}}</li>
        </ul>
    </div>
@endif

    <h1>Media</h1>

    
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        @if($photos)
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td>{{$photo->file}}</td>
                    <td><img height="50" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
                            {{csrf_field()}}
                            <div class="from-group col-sm-6">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


@stop