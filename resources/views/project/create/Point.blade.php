<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Point</title>
</head>
<body>
    <form action="{{route('admin.create.post_Point')}}" method="post">
        name : <br>
        <input type="text" name="name"><br><br>
        ap : <br>
        <select name="ap_id">
            @foreach (App\Models\AP::all() as $ap)
                <option value="{{$ap->id}}">{{$ap->name}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="create">
    </form>
</body>
</html>
