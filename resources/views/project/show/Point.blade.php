@extends('dashboard')

@section('header_name')
    Show Point
@endsection

@section('content')
<br><br>
    <table class="table">
        <td>id : {{$point->id}}</td>
        <td>name : {{$point->name}}</td>
        @if ($point->ap == null)
            <td>ap_id : -</td>
        @else
            <td>ap_id : <a href="{{route('show.AP', ['ap'=> $point->ap->id])}}"><button class="btn btn-outline-primary btn-sm">{{$point->ap->id}}</button></a></td>
        @endif
        <td>created_at : {{$point->created_at}}</td>
        <td>updated_at : {{$point->updated_at}}</td>
    </table>

@endsection
