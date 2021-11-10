<form action="{{route('auth')}}" method="POST">
    @csrf
    <input name="email" id="email" value="">
    <input name="password" id="password" value="">

    <button type="submit"> simpan</button>
</form>
