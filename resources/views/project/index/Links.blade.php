@extends('dashboard')

@section('header_name')
<div class="d-flex justify-content-between">
    <div class="mt-2">
        Links
    </div>
</div>
@endsection

@section('content')
<br><br>
<table class="table" border="1">
    <tr>
        <td>ap_id</td>
        <td>point_id</td>
        <td>created_at</td>
    </tr>
    @foreach (App\Models\Link::all() as $link)
    <tr>
        <td>{{$link->ap_id}}</td>
        <td>{{$link->point_id}}</td>
        <td>{{$link->created_at}}</td>
    </tr>
    @endforeach
</table>
@endsection
