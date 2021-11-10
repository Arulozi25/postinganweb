<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Register Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  /* padding: 15px; */
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 0px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>


    <!-- Custom styles for this template -->
    {{-- <link href="/css/style.css" rel="stylesheet"> --}}
  </head>
  <body class="text-center">
<main class="form-signin">
    @if (session()->has('Success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('Success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- @if (session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif --}}
    @if (session()->has('fail'))
        <div class="aler alert-danger">
            {{ session('fail') }}
        </div>
    @endif
    <h1 class="h3 mb-3 fw-normal">Login</h1>
  <form action="{{ route('login') }}" method="POST">
    @csrf
    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

    <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')
        is-invalid
        @enderror" id="email" placeholder="Email addres" required value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        @error('email')
      <div class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
      </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password')
      is-invalid
      @enderror" id="Password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> --}}
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
    <p class="text-center bottom-caption">
        Don't have an account yet?
        <a href="/Register"><span class="green-bottom-caption">Register here</span></a>
      </p>

    {{-- @method('PUT') --}}
  </form>
</main>



  </body>
</html>
