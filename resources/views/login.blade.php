<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
<div class="mt-5">

{{-- Check if there are any validation errors --}}
@if($errors->any())
    <div class="col-12">
        {{-- Loop through each error and display --}}
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

{{-- Check for session success message --}}
@if(session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- Login form --}}
<form action="{{ route('login.post') }}" method="POST" class="ms-auto me-auto mt-5" style="width: 500px">
    @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="mb-3 form-check d-flex justify-content-end">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label ms-2" for="exampleCheck1">Check me out</label>
        </div>

        <div class="btnSub d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>