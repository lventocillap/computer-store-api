<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta Generada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            width: auto;
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Venta Generada</h1>
        <h2>Datos del Cliente</h2>
        <p><strong>Nombre:</strong> {{ $user['name'] }}</p>
        <p><strong>DNI:</strong>{{ $user->profile->dni}}</p>
        <p><strong>Cellphone:</strong>{{ $user->profile->cellphone}}</p>
        <p><strong>Dirección:</strong> {{ $user->profile->direcction }}</p>
        <p><strong>Fecha del Reporte:</strong> {{ date('d/m/Y') }}</p>
    </header>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['duplicated_products'] as $producto)
            <tr>
                <td>{{ $producto['name'] }}</td>
                <td>{{ $producto['brand'] }}</td>
                <td>{{ $producto['duplicate_count'] }}</td>
                <td>S/.{{ $producto['price'] }}</td>
                <td>S/.{{ number_format($producto['total_price'], 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p class="total">Monto Total: <strong>S/.{{ number_format($data['total_amount'], 2) }}</strong></p>
</body>

</html>