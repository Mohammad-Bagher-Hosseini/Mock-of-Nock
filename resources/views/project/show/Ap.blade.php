@extends('dashboard')

@section('header_name')
    Show AP
@endsection

@section('content')
<br><br>
    <table class="table">
        <td>id : {{$ap->id}}</td>
        <td>name : {{$ap->name}}</td>
        <td>pop_id : <a href="{{route('show.Pop', ['pop'=> $ap->pop->id])}}"><button class="btn btn-outline-primary btn-sm">{{$ap->pop->id ?? "-"}}</button></a></td>
        @if ($ap->point == null)
            <td>point_id : -</td>
        @else
            <td>point_id : <a href="{{route('show.Point', ['point'=> $ap->point->id])}}"><button class="btn btn-outline-primary btn-sm">{{$ap->point->id}}</button></a></td>
        @endif
        <td>created_at : {{$ap->created_at}}</td>
        <td>updated_at : {{$ap->updated_at}}</td>
    </table>
@endsection

