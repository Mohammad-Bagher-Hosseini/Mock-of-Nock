<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pop</title>
</head>
<body>
    <form action="{{route('admin.edit.post_Pop')}}" method="post">
        name : <br>
        <input type="text" name="name" value="{{$pop->name}}"><br><br>
        aps : <br>
        <select name="ap_id" multiple>
            @foreach (App\Models\AP::all() as $ap)
            @if (in_array($ap->id, $pop->APs))
                <option value="{{$ap->id}}" selected>{{$ap->name}}</option>
            @endif
                <option value="{{$ap->id}}">{{$ap->name}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="edit">
    </form>
</body>
</html>
