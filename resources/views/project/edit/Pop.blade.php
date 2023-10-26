@extends('dashboard')

@section('header_name')
    Edit Pop
@endsection

@section('content')
<br><br>
<form action="{{route('admin.edit.post_Pop', ['pop'=> $pop->id])}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$pop->name}}">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
