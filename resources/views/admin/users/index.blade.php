@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_user'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('deleted_user')}}</li>
        </ul>
    </div>
@endif

<div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Usuarios
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
          </thead>
          <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/300x300'}}" alt=""></td>
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role['name']}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
</div>


@stop

@section('scripts')
    <script src="{{asset('js/sb-admin-charts.js')}}"></script>
    <script src="{{asset('js/sb-admin-datatables.js')}}"></script>
@stop
