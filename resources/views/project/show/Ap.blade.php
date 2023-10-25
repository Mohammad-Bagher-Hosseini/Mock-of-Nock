<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show AP</title>
</head>
<body>
    <div>id : {{$ap->id}}</div>
    <div>name : {{$ap->name}}</div>
    <div>pop_id : <a href="{{route('show.Pop', ['pop'=> $ap->pop->id])}}">{{$ap->pop->id}}</a></div>
    <div>point_id : <a href="{{route('show.AP', ['point'=> $ap->point->id])}}">{{$ap->point->id}}</a></div>
    <div>created_at : {{$ap->created_at}}</div>
    <div>updated_at : {{$ap->updated_at}}</div>
</body>
</html>
