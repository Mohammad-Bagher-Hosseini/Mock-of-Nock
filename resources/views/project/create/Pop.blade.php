@extends('dashboard')

@section('header_name')
    Edit Pop
@endsection

@section('content')
<br><br>
<form action="{{route('admin.edit.post_Pop')}}" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
