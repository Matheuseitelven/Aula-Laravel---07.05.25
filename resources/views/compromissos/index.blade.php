<h1>Lista de Compromissos</h1>
<hr>

@if ($errors -> any())
    <h3 style="color:red">Erro!</h3>
    <ul>
        @foreach ($errors -> all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('compromissos.salvar') }}" method="post">
    @csrf
    <input type="text" name="titulo"
    placeholder="O que você tem para fazer?" value="{{ old('titulo') }}">
    <input type="text" name="titulo" placeholder="O que você tem para fazer?">
    <br>
    <input type="datetime-local" name="quando">
    <input type="submit" value="Gravar">
</form>
<hr>
Sua lista:
<ul>
    @foreach ($compromissos as $comp)
    <li>
        {{ $comp -> titulo }} ({{ $comp -> quando }}) |

        <a href="{{ route('compromissos.editarForm', $comp->id) }}">Editar</a>


        <form action="{{ route('compromissos.apagar') }}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $comp->id }}">
        <input type="submit" value="Apagar">
        
        </form>
    
    </li>
    
    @endforeach
</ul>
