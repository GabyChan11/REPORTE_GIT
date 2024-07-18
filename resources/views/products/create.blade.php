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

    <h2>Registrar producto</h2>
    
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif
    
    
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="">Producto</label>
        <input type="text" name="nameProduct" required>

        <label for="">Cantidad</label>
        <input type="number" name="stock" required>

        <label for="">Precio unitario</label>
        <input type="text" name="unit_price" required>

        <label for="">Marca</label>
        <br>
        <select name="id_brand">
            <option value="">Seleccionar...</option>
            @foreach ($brands as $brand => $id)
                <option value="{{$id}}">{{$brand}}</option>
            @endforeach

        </select>

        <button type="submit">Registrar</button>



    </form>
@endsection