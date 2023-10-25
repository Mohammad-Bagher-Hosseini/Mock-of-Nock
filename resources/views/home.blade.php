@extends('dashboard')

@section('header_name')
    Home
@endsection

@section('content')
<span class="p-5">
    <h3>APs :
        <a href="{{route('admin.create.get_AP')}}"><button class="btn btn-outline-primary">create</button></a>
    </h3>
</span>
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
<span class="p-5">
    <h3>Points :
        <a href="{{route('admin.create.get_Point')}}"><button class="btn btn-outline-primary">create</button></a>
    </h3>
</span>
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
<span class="p-5">
    <h3>Pops :
        <a href="{{route('admin.create.get_Pop')}}"><button class="btn btn-outline-primary">create</button></a>
    </h3>
</span>
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

<span class="p-5">
    <h3>
        Links :
    </h3>
</span>
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
