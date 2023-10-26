@extends('dashboard')

@section('header_name')
    <div class="d-flex justify-content-between">
        <div class="mt-2">
            APs
        </div>
        <div>
            @role('Admin')
                <a href="{{route('admin.create.get_AP')}}"><button class="btn btn-outline-primary">create</button></a>
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
    @foreach (App\Models\AP::all() as $ap)
    <tr>
        <td>{{$ap->name}}</td>
        <td>{{$ap->created_at}}</td>
        <td>
            <a href="{{route('show.AP', ['ap' => $ap->id])}}"><button class="btn btn-outline-primary">show</button></a>
        @role('Admin')
            <a href="{{route('admin.edit.get_AP', ['ap' => $ap->id])}}"><button class="btn btn-outline-success">edit</button></a>
               <form class="d-inline" action="{{route('admin.delete.AP', ['ap' => $ap->id])}}" method="post">
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
