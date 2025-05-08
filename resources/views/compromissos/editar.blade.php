<form action="{{ route('compromissos.editar') }}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $compromisso->id }}">
    <input type="text" name="titulo" placeholder="O que você tem para fazer?" value="{{ $compromisso ->titulo }}">
    <br>
    <input type="datetime-local" name="quando" value="{{ $compromisso->quando }}">
    <input type="submit" value="Gravar">
</form>