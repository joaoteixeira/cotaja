<html>
<head>

</head>

<body>
<div>
    <form action="/supermercados/{{$supermercado->id}}" method="POST">
        Nome do Supermercado:
        <input type="text" name="nome" value="{{$supermercado->nome}}">
        <br>
        <input type="submit">

        {{csrf_field()}}
        {{method_field('PUT')}}
    </form>
</div>
</body>
</html>