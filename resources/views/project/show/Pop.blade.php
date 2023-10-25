@extends('dashboard')

@section('header_name')
    Show Pop
@endsection

@section('content')
    <br><br>
    <table class="table">
        <td>id : {{$pop->id}}</td>
        <td>name : {{$pop->name}}</td>
        @foreach ($pop->APs as $ap)
            <td>ap_id : <a href="{{route('show.AP', ['ap'=> $ap->id])}}">{{$ap->id}}</a></td>
        @endforeach
        <td>created_at : {{$pop->created_at}}</td>
        <td>updated_at : {{$pop->updated_at}}</td>
    </table>
@endsection
