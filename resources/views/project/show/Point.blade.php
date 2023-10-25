@extends('dashboard')

@section('header_name')
    Show Point
@endsection

@section('content')
<br><br>
    <table class="table">
        <td>id : {{$point->id}}</td>
        <td>name : {{$point->name}}</td>
        <td>ap_id : <a href="{{route('show.AP', ['ap'=> $point->ap->id])}}">{{$point->ap->id}}</a></td>
        <td>created_at : {{$point->created_at}}</td>
        <td>updated_at : {{$point->updated_at}}</td>
    </table>

@endsection
