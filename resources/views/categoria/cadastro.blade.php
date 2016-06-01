<html>
<head></head>
<body>
    <div>
        <form method="post" action="/categorias">
            Nome da categoria:
            <input type="text" name="nome">

            <input type="submit">
            {{csrf_field()}}
        </form>
    </div>
</body>
</html>