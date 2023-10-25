@extends('dashboard')

@section('header_name')
    Edit Point
@endsection

@section('content')
<br><br>
<form action="{{route('admin.create.post_Point')}}" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="ap_id" class="form-label">AP : </label>
        <select id="ap_id" class="form-select">
            @foreach (App\Models\AP::all() as $ap)
                <option value="{{$ap->id}}">{{$ap->name}}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
