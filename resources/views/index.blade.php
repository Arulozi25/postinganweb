@extends('Layouts.navbar')

@section('konten')
@foreach ($posting as $post)
<div class="container" style="padding: 20px">
<div class="card">
    <h5 class="card-header">{{ $post["username"] }}</h5>
    <div class="card-body">
      <h5 class="card-title">{{ $post["title"] }}</h5>
      <p class="card-text">{{ $post["posting"] }}</p>
      <a href="Home/{{ $post["slug"] }}" class="btn btn-primary">Komen</a>
    </div>
  </div>
</div>
@endforeach
@endsection
