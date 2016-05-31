<html>

<body>
    <div>
        <table>
            <tr>
            <th>Nome da Marca</th>
            </tr>
            @foreach($marcas as $marca)
            <tr>
                    <td>{{$marca->nome}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

