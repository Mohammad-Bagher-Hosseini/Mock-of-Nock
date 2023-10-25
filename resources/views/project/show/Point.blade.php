<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Point</title>
</head>
<body>
    <div>id : {{$point->id}}</div>
    <div>name : {{$point->name}}</div>
    <div>ap_id : <a href="{{route('show.AP', ['ap'=> $point->ap->id])}}">{{$point->ap->id}}</a></div>
    <div>created_at : {{$point->created_at}}</div>
    <div>updated_at : {{$point->updated_at}}</div>
</body>
</html>
