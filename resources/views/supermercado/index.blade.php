<html>

<body>
<div>
    <table>
        <tr>
            <th>Nome do Supermercado</th>
        </tr>
        @foreach($supermercados as $supermercado)
            <tr>
                <td>img da logo</td>
                <td>{{$supermercado->nome}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>

