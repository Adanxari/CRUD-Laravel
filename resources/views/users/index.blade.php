@extends('users.layout')

@section('content')

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('create')}}"> Create New user</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $index=>$user)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{route('destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{route('show',$user->id)}}">Show</a>

                    <a class="btn btn-primary" href="{{route('edit',$user->id)}}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" href="{{route('destroy',$user->id)}}">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
