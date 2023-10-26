@extends('dashboard')

@section('header_name')
<div class="d-flex justify-content-between">
    <div class="mt-2">
        Points
    </div>
    <div>
        @role('Admin')
           <a class="ms-auto" href="{{route('admin.create.get_Point')}}"><button class="btn btn-outline-primary">create</button></a>
        @endrole
    </div>
</div>
@endsection

@section('content')
<br><br>
<table class="table" border="1">
    <tr>
        <th>name</th>
        <th>created_at</th>
        <th>action</th>
    </tr>
    @foreach (App\Models\Point::all() as $point)
    <tr>
        <td>{{$point->name}}</td>
        <td>{{$point->created_at}}</td>
        <td>
            <a href="{{route('show.Point', ['point' => $point->id])}}"><button class="btn btn-outline-primary">show</button></a>
        @role('Admin')
            <a href="{{route('admin.edit.get_Point', ['point' => $point->id])}}"><button class="btn btn-outline-success">edit</button></a>

                <form class="d-inline" action="{{route('admin.delete.Point', ['point' => $point->id])}}" method="post">
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
