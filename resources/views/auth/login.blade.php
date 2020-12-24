@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <form method="POST" action="/login">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        class="form-control @error('email') is-invalid @enderror"
      >
      @include('partials.error-message', ['field' => 'email'])
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        class="form-control @error('password') is-invalid @enderror"
      >
      @include('partials.error-message', ['field' => 'password'])
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
