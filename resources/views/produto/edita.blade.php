<html>
<head>

</head>

<body>
<div>
    <form action="/produtos" method="POST">
        Nome do Produto:
        <input type="text" name="nome" value="{{$produto->nome}}">

        <br>
        Categoria do Produto:
        <select name="categoria_id">
                <option>{{ $produto->categoria }}</option>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
        </select>

        <br>
        Marca do Produto:
        <select name="marca_id">
                <option>{{$produto->marca}}</option>
                @foreach($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->nome}}</option>
                @endforeach

        </select>

        <!--
        CADASTRO DE QUANTIDADE E VALOR, SOMENTE QUANDO FOR REALIZAR O VINCULO COM O SUPERMERCADO
        -->

        <br>

        <input type="submit">
        
        {{csrf_field()}}
        {{method_field('PUT')}}

    </form>
</div>
</body>
</html>