<htl>
    <body>
        <div>
            <table>
                <tr>
                    <td>Categorias</td>
                </tr>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->nome}}</td>    
                        <td><a href="/categorias/{{$categoria->id}}/edit">Editar</a></td>    
                        <td>
                            <form action="/categorias/{{$categoria->id}}" method="post">
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
</htl>