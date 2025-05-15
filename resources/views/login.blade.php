{{ session('msg') }}

<form action="{{ route('acesso.login') }}" method="post">
    @csrf
    <input type="text" name="email">
    <br>
    <input type="text" name="password">
    <br>
    <input type="submit" name="Acessar">

</form>