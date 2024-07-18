@extends('layaout.main_template')

@section('content')
    
    <style>
        *{box-sizing: border-box}
        form{
            width: 300px;
            padding-inline: 20px;
            padding-block: 20px;
            border-radius: 12px;
            margin-block: auto;
            margin-inline: auto;
            background-color: coral;
        }

        form label{
            width: 140px;
            height: 10px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            display: inline-block;
        }

        form button[type="submit"]{
            width: 100%;
            padding: 8px 12px;
            margin-block-start: 30px;
            border: 2px solid #000000;
            border-radius: 3px;
            display: block;
            color: aliceblue;
            background-color: #000000;
        }

    </style>

    <h2>Registrar cliente</h2>
    
    
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" required>

        <label for="">Primer apellido</label>
        <input type="text" name="last_name" required>

        <label for="">Segundo apellido</label>
        <input type="text" name="s_lastname" required>

        <label for="">Email</label>
        <input type="email" name="email" required>

        <label for="">Teléfono</label>
        <input type="number" name="phone" required>

        <label for="">Estado</label>
        <input type="text" name="state" required>

        <label for="">Ciudad</label>
        <input type="text" name="town" required>

    

        <button type="submit">Registrar</button>



    </form>
@endsection