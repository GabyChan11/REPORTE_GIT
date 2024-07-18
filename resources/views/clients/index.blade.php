@extends('layaout.main_template')

@section('content')
    <h2>Página de clientes</h2>
    <br>
    <button><a href="{{route('clients.create')}}">Registrar Cliente</a></button>
    <br>
    
    <h4>TO DO Read Database in format table</h4>

    <table>
        <thead>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Ciudad</th>
            <th>Acciones</th>

        </thead>
        <br>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td> {{$c->name}}</td>
                    <td> {{$c->last_name}}</td>
                    <td> {{$c->s_lastname}}</td>
                    <td> {{$c->email}}</td>
                    <td> {{$c->phone}}</td>
                    <td> {{$c->state}}</td>
                    <td> {{$c->town}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection