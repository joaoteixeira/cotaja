<html>
<head>

</head>

<body>
    <div>
        <form action="/marcas" method="POST">
            Nome da marca:
            <input type="text" name="nome">
            <br>
            <input type="submit">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</body>
</html>