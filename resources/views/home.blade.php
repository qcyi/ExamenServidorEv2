@extends("layouts.layout")

@section("content")
    <div>
        <button><a href="{{ route("login") }}">Acceder</a></button>
        <button><a href="{{ route("register") }}">Registrarme</a></button>
    </div>
@endsection

@section("title")
    Examen 2ºEvaluación
@endsection
@section("description")
    El examen de Servidor.
@endsection
