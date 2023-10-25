@extends('dashboard')

@section('header_name')
    Edit AP
@endsection

@section('content')
<br><br>
<form action="{{route('admin.edit.post_AP', ['ap'=> $ap->id])}}" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$ap->name}}">
    </div>
    <label for="pop_id" class="form-label">Pop : </label>
    <select id="pop_id" class="form-select">
        @foreach (App\Models\Pop::all() as $pop)
        @if ($ap->pop->id == $pop->id)
            <option value="{{$pop->id}}" selected>{{$pop->name}}</option>
        @endif
            <option value="{{$pop->id}}">{{$pop->name}}</option>
        @endforeach
    </select><br>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
