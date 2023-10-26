@extends('dashboard')

@section('header_name')
<div class="d-flex justify-content-between">
    <div class="mt-2">
        Users
    </div>
    <div>
        @role('Admin')
            <a href="{{route('admin.create.get_User')}}"><button class="btn btn-outline-primary">create</button></a>
        @endrole
    </div>
</div>
@endsection

@section('content')
<br><br>
<table class="table" border="1">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>type</th>
        <th>created_at</th>
        <th>action</th>
    </tr>
    @foreach (App\Models\User::all() as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->getRoleNames()[0]}}</td>
        <td>{{$user->created_at}}</td>
        <td>
            <a href="{{route('show.User', ['user' => $user->id])}}"><button class="btn btn-outline-primary">show</button></a>
        @role('Admin')
            <a href="{{route('admin.edit.get_User', ['user' => $user->id])}}"><button class="btn btn-outline-success">edit</button></a>
               <form class="d-inline" action="{{route('admin.delete.User', ['user' => $user->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-outline-danger">delete</button>
                </form>
        @endrole
        </td>
    </tr>
    @endforeach
</table><br><br>

@endsection
