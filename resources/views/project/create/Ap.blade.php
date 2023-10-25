<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create AP</title>
</head>
<body>
    <form action="{{route('admin.create.post_AP')}}" method="post">
        name : <br>
        <input type="text" name="name"><br><br>
        pop :
        <select name="pop_id">
            @foreach (App\Models\Pop::all() as $pop)
                <option value="{{$pop->id}}">{{$pop->name}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="create">
    </form>
</body>
</html>
