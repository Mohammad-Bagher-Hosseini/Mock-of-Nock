@extends('dashboard')

@section('header_name')
    Show user
@endsection

@section('content')
<br><br>
    <table class="table">
        <td>id : {{$user->id}}</td>
        <td>name : {{$user->name}}</td>
        <td>email : {{$user->email}}</td>
        <td>type : {{$user->getRoleNames()[0]}}</td>
        <td>created_at : {{$user->created_at}}</td>
        <td>updated_at : {{$user->updated_at}}</td>
    </table>
@endsection
