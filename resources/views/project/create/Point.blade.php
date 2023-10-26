@extends('dashboard')

@section('header_name')
    Edit Point
@endsection

@section('content')
<br><br>
<form action="{{route('admin.create.post_Point')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="mb-3">
        <label for="ap_id" class="form-label">AP : </label>
        <select name="ap_id" id="ap_id" class="form-select">
            @foreach (App\Models\AP::all() as $ap)
                <option value="{{$ap->id}}">{{$ap->name}}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
