@extends('dashboard')

@section('header_name')
    <div class="d-flex justify-content-between">
        <div class="mt-2">
            Pops
        </div>
        <div>
            @role('Admin')
                <a href="{{route('admin.create.get_Pop')}}"><button class="btn btn-outline-primary">create</button></a>
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
    @foreach (App\Models\Pop::all() as $pop)
    <tr>
        <td>{{$pop->name}}</td>
        <td>{{$pop->created_at}}</td>
        <td>
            <a href="{{route('show.Pop', ['pop' => $pop->id])}}"><button class="btn btn-outline-primary">show</button></a>
        @role('Admin')
            <a href="{{route('admin.edit.get_Pop', ['pop' => $pop->id])}}"><button class="btn btn-outline-success">edit</button></a>

                <form class="d-inline" action="{{route('admin.delete.Pop', ['pop' => $pop->id])}}" method="post">
                     @method('delete')
                     @csrf
                     <button class="btn btn-outline-danger">delete</button>
                 </form>
            @endrole
        </td>
    </tr>
    @endforeach
</table>
@endsection
