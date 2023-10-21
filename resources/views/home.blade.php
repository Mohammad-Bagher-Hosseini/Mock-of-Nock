<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
@auth
    <form action="" method="post">
        <button>log out</button>
    </form><br><br>
@endauth
<h3>APs : </h3>
<table border="1">
    <th>name</th>
    <th>created_at</th>
    @foreach (App\Models\AP::all() as $ap)
        <td>{{$ap->name}}</td>
        <td>{{$ap->created_at}}</td>
        <td><a href="{{route('show.AP'), ['ap' => $ap->id]}}"><button>show</button></a></td>
        @role('Admin')
            <td><a href="{{route('admin.create.get_AP'), ['ap' => $ap->id]}}"><button>create</button></a></td>
            <td><a href="{{route('admin.edit.get_AP'), ['ap' => $ap->id]}}"><button>edit</button></a></td>
            <td>
               <form action="{{route('admin.delete.AP'), ['ap' => $ap->id]}}" method="post">
                    @method('delete')
                    <button>delete</button>
                </form>
            </td>
        @endrole
    @endforeach
</table><br><br>

<h3>Points : </h3>
<table border="1">
    <th>name</th>
    <th>created_at</th>
    @foreach (App\Models\Point::all() as $point)
        <td>{{$point->name}}</td>
        <td>{{$point->created_at}}</td>
        <td><a href="{{route('show.Point'), ['point' => $point->id]}}"><button>show</button></a></td>
        @role('Admin')
            <td><a href="{{route('admin.create.get_Point'), ['point' => $point->id]}}"><button>create</button></a></td>
            <td><a href="{{route('admin.edit.get_Point'), ['point' => $point->id]}}"><button>edit</button></a></td>
            <td>
                <form action="{{route('admin.delete.Point'), ['point' => $point->id]}}" method="post">
                     @method('delete')
                     <button>delete</button>
                 </form>
             </td>
        @endrole
    @endforeach
</table><br><br>

<h3>Pops : </h3>
<table border="1">
    <th>name</th>
    <th>created_at</th>
    @foreach (App\Models\Pop::all() as $pop)
        <td>{{$pop->name}}</td>
        <td>{{$pop->created_at}}</td>
        <td><a href="{{route('show.Pop'), ['pop' => $pop->id]}}"><button>show</button></a></td>
        @role('Admin')
            <td><a href="{{route('admin.create.get_Pop'), ['pop' => $pop->id]}}"><button>create</button></a></td>
            <td><a href="{{route('admin.edit.get_Pop'), ['pop' => $pop->id]}}"><button>edit</button></a></td>
            <td>
                <form action="{{route('admin.delete.Pop'), ['pop' => $pop->id]}}" method="post">
                     @method('delete')
                     <button>delete</button>
                 </form>
             </td>
        @endrole
    @endforeach
</table>

//TODO: links
</body>
</html>
