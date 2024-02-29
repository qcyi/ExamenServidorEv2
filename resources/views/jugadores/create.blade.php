@extends("layouts.layout")

@section("content")
    {{$errors}}
    <div>
        <form action="{{ route("jugadores.store")}}" method="post">
            @csrf
            <x-input-label for="email" value="DNI"/>
            <x-text-input type="text" name="dni" id="dni" required/>
            <x-input-label for="nombre" value="Nombre"/>
            <x-text-input type="text" name="nombre" id="nombre" required/>
            <x-input-label for="email" value="Correo"/>
            <x-text-input type="text" name="email" id="email" required/>
            <x-input-label for="email" value="Nick"/>
            <x-text-input type="text" name="nick" id="nick" required/>
            <x-input-label for="email" value="Contraseña"/>
            <x-text-input type="text" name="password" id="password" required/>
            <button class="m-3">Actualizar</button>
        </form>
    </div>
@endsection
@section("title")
    Jugadores
@endsection

@section("description")
    Crear un jugador
@endsection
