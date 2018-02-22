@extends('layouts.admin')




@section('content')

@if(Session::has('deleted_photo'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_photo')}}</li>
        </ul>
    </div>
@endif

@if(Session::has('deleted_photos'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_photos')}}</li>
        </ul>
    </div>
@endif

    <h1>Media</h1>

    @if($photos)

        <form action="delete/media" method="post" class="form-inline">
            {{csrf_field()}}
            <div class="form-group">
                <select name="checkBoxArray" id="" class="form-control">
                    <option value="delete">Delete</option>
            </div>
            <div class="form-group">
                <input type="submit" class="btn-primary">
            </div>
        
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="options"></th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
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
                
                </tbody>
            </table>

        </form>
    @endif

@stop


@section('scripts')

    <script>
        $(document).ready(function(){
            $('#options').click(){
                if(this.checked){
                    $('.checkBoxes').each(function(){
                        this.checked = true;
                    });
                } else {
                    $('.checkBoxes').each(function(){
                        this.checked = false;
                    });
                }
            }
        });
    </script>

@stop