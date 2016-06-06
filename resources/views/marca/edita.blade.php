<html>
<head>

</head>

<body>
<div>
    <form action="/marcas/{{$marca->id}}" method="POST">
        Nome da marca:
        <input type="text" name="nome" value="{{$marca->nome}}">
        <br>
        <input type="submit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        {{ csrf_field() }}
        {{ method_field('PUT') }}
    </form>
</div>
</body>
</html>