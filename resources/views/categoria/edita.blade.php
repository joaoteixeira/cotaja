<html>
<body>
    <div>
        <form action="/categorias/{{$categoria->id}}" method="post">
            Nome da categoria:
            <input type="text" name="nome" value="{{$categoria->nome}}">
            
            <input type="submit">
            
            {{csrf_field()}}
            {{method_field('PUT')}}
        </form>
    </div>
</body>
</html>