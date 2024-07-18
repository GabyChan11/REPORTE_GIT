<style>
    header{
        background: rgb(16, 16, 16, 0.8);
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }

    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }


    nav p a{
        color: rgb(210, 225, 48);
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }

    nav p a:hover{
        background: rgb(204, 91, 21);
        padding-block: 20px;
        padding-inline: 10px;
    }


</style>
<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients.index')}}">Clientes</a>
            <a href="{{route('sales.index')}}">Ventas</a>
        </p>
    </nav>
</header>
<br>