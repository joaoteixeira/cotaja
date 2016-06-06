<html>

<body>
<div>
    <table>
        <tr>
            <th>Logo</th>
            <th>Nome do Supermercado</th>
        </tr>
        @foreach($supermercados as $supermercado)
            <tr>
                <td>img</td>
                <td>{{$supermercado->nome}}</td>
                <td><a href="/supermercados/{{$supermercado->id}}/edit">Editar</a> </td>
                <td>
                    <form method="post" action="/supermercados/{{$supermercado->id}}">
                        <input type="submit" value="Excluir">
                        
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>

