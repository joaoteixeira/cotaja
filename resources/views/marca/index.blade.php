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
                    <td><a href="/marcas/{{$marca->id}}/edit">Editar</a></td>
                    <td>
                        <form method="post" action="/marcas/{{$marca->id}}">
                            <input type="submit" value="Excluir">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

