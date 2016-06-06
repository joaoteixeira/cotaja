<html>
<head>

</head>

<body>
<div>
    <form action="/supermercados" method="POST">
        Logo do Supermercado:
        <input type="file" name="img">
        Nome do Supermercado:
        <input type="text" name="nome">
        <br>
        <input type="submit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</div>
</body>
</html>