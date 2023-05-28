<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f1f1f1;
        background-image: url(https://www.citroen.com.ec/wp-content/uploads/2013/04/00_main-history-passenger-cars1-1320x754.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        text-align: center;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    a {
        display: inline-block;
        padding: 10px;
        background-color: #ddd;
        color: #0a0a0a;
        text-decoration: none;
        margin-top: 5%;
        border-radius: 4px;
    }

    a:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div class="container">
        <h1>Vehicle Database</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Marca}}</td>
                    <td>{{$item->Modelo}}</td>
                    <td>{{$item->Tipo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container">
        <a href="{{url('/vehiculos/create')}}">Ingresar Vehiculo</a>
    </div>
</body>
</html>