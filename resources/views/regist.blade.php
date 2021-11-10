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
    <h1 class="h3 mb-3 fw-normal">Registration</h1>
  <form action="{{route('regist')}}" method="POST">
    @csrf
    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name')
      is-invalid
      @enderror" id="floatingInput" placeholder="Name" required value="{{ old('name') }}">
      <label for="floatingInput" >Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username')
      is-invalid
      @enderror" id="floatingInput" placeholder="User Name" required value="{{ old('username') }}">
      <label for="floatingInput" >User Name</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
    <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')
        is-invalid
        @enderror" id="floatingInput" placeholder="Email addres" required value="{{ old('email') }}">
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
      @enderror" id="floatingPassword" placeholder="Password" required>
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
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Regist</button>
    <p class="text-center bottom-caption">
        You have acount?
        <a href="/"><span class="green-bottom-caption">Login</span></a>
      </p>

    {{-- @method('PUT') --}}
  </form>
</main>



  </body>
</html>
