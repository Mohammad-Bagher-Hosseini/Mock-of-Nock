@extends('dashboard')

@section('header_name')
    Edit Point
@endsection

@section('content')
<br><br>
<form action="{{route('admin.edit.post_Point', ['point'=> $point->id])}}" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$point->name}}">
    </div>
    <div class="mb-3">
        <label for="ap_id" class="form-label">AP : </label>
        <select id="ap_id" class="form-select">
            @foreach (App\Models\AP::all() as $ap)
            @if ($point->ap->id == $ap->id)
                <option value="{{$ap->id}}" selected>{{$ap->name}}</option>
            @endif
                <option value="{{$ap->id}}">{{$ap->name}}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
