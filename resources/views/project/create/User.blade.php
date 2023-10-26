@extends('dashboard')

@section('header_name')
    Create User
@endsection

@section('content')
<br><br>
<form action="{{route('admin.create.post_User')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name : </label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email : </label>
      <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password : </label>
      <input type="text" class="form-control" name="password" id="password" aria-describedby="emailHelp">
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="mb-3">
      <label for="confirm" class="form-label">Confirm Password : </label>
      <input type="text" class="form-control" name="confirm" id="confirm" aria-describedby="emailHelp">
      <x-input-error :messages="$errors->get('confirm')" class="mt-2" />
    </div>

    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
@endsection
