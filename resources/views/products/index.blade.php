@extends('layaout.main_template')

@section('content')
    <h2>Página de productos</h2>
    <br>
    <button><a href="{{route('products.create')}}">Registrar Producto</a></button>
    <br>
    
    <h4>TO DO Read Database in format table</h4>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th>Más detalles</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <br>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td> {{$p->nameProduct}}</td>
                    <td> {{$p->stock}}</td>
                    <td> {{$p->unit_price}}</td>
                    <td> {{$p->BrandFunction->brand}}</td>
                    <td> <img src="/image/products/{{$p->image}}" width="100" alt="Dulce.jpeg"></td>
                    
                    <td>
                        <button ><a href="{{route('products.show', $p)}}">Mostrar</a></button>
                    </td>
                    <td>
                        <button><a href="{{route('products.edit', $p)}}">Editar</a></button>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', $p)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>

                        </form>  
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@endsection