<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
</head>
<body>
<table>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Marca</th>
    </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>img do produto</td>
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->categoria->nome }}</td>
        <td>{{ $produto->marca->nome }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
