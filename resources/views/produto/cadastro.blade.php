<html>
<head>

</head>

<body>
<div>
    <form action="/produtos" method="POST">
        Nome do Produto:
        <input type="text" name="nome">

        <br>
        Categoria do Produto:
        <select name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>

        <br>
        Marca do Produto:
        <select name="marca_id">
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
            @endforeach
        </select>

        <!--
        CADASTRO DE QUANTIDADE E VALOR, SOMENTE QUANDO FOR REALIZAR O VINCULO COM O SUPERMERCADO
        -->

        <br>
        <input type="submit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>
</div>
</body>
</html>