@extends('layouts.app')

@section('title', 'Register')

@section('content')
  <form method="POST" action="/register">
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
      <label for="title" class="form-label">Name</label>
      <input
        type="text"
        name="name"
        id="name"
        class="form-control @error('name') is-invalid @enderror"
      >
      @include('partials.error-message', ['field' => 'name'])
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
    <div class="mb-3">
      <label for="title" class="form-label">Confirm password</label>
      <input
        type="password"
        id="password_confirmation"
        name="password_confirmation"
        class="form-control @error('password_confirmation') is-invalid @enderror"
      >
      @include('partials.error-message', ['field' => 'password_confirmation'])
    </div>

    <div class="mb-3 form-check">
      <input
        type="checkbox"
        id="agreed"
        name="agreed"
        value="1"
        class="form-check-input @error('agreed') is-invalid @enderror"
      >
      <label class="form-check-label @error('agreed') is-invalid @enderror" for="agreed">I agree to terms and conditions</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
