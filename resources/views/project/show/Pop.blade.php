<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Pop</title>
</head>
<body>
    <div>id : {{$pop->id}}</div>
    <div>name : {{$pop->name}}</div>
    @foreach ($pop->APs as $ap)
        <div>ap_id : <a href="{{route('show.AP', ['ap'=> $ap->id])}}">{{$ap->id}}</a></div>
    @endforeach
    <div>created_at : {{$pop->created_at}}</div>
    <div>updated_at : {{$pop->updated_at}}</div>
</body>
</html>
