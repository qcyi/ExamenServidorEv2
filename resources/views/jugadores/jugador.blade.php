@extends("layouts.layout")

@section("content")
    <div>
        @auth
        <a href="{{route(('jugadores.create'))}}">
            <button>Nuevo Jugador</button>
        </a>
        @endauth
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Nick</th>
                <th>Contraseña</th>
                @auth
                    <th></th>
                    <th></th>
                @endauth
            </tr>
            @foreach($jugadores as $jugador)
                <tr>
                    <td>{{$jugador->dni}}</td>
                    <td>{{$jugador->nombre}}</td>
                    <td>{{$jugador->email}}</td>
                    <td>{{$jugador->nick}}</td>
                    <td>{{$jugador->password}}</td>
                    @auth
                        <td>
                            <form action="{{ route("jugadores.show", $jugador->dni) }}" method="post">
                                @csrf
                                @method("GET")
                                <button type="submit">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form id="form-delete" action="{{ route("jugadores.destroy", $jugador->dni) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit">Borrar</button>
                            </form>
                        </td>
                    @endauth
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@section("title")
    Jugadores
@endsection
@section("description")

@endsection
