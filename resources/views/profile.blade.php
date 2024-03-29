@extends('layouts.template')

@section('title')
  Transaction History
@endsection

@section('content')
  <div class="row justify-content-center">
    <div class="col-8 my-4" style="border: 1px solid lightgray">
      <h1 class="text-center my-4">My Profile</h1>
      <div class="d-flex justify-content-center my-3">
        <button class="btn btn-secondary" disabled>{{ $role }}</button>
      </div>
      <h5 class="text-center"><strong>Username: {{ $username }}</strong></h5>
      <h6 class="text-center mb-3">{{ $email }}</h6>
      <h6 class="text-center">Address: {{ $address }}</h6>
      <h6 class="text-center mb-3">Phone: {{ $phone }}</h6>
      <div class="d-flex justify-content-center mb-4">
        @if ($role == 'member')
          <a href="/edit-profile" class="text-white text-decoration-none"><button class="btn btn-secondary me-3">Edit
              Profile</button></a>
        @endif
        <a href="/edit-password" class="text-decoration-none"><button class="btn btn-secondary">Edit
            Password</button></a>
      </div>
    </div>
  </div>
@endsection
