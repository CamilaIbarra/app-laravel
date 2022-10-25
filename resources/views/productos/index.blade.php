<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
        table {
            width: 90%;
        }
    </style>
</head>
<body>
    <h1>Catalogo de productos vista {{ $lista->count() }}</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->existencia }}</td>
                    <td>{{ $item->categoria->nombre }}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- <form action="" method="POST">
        @method("DELETE")
        @csrf

        <button type="submit">Eliminar</button>
    </form> -->
</body>
</html>