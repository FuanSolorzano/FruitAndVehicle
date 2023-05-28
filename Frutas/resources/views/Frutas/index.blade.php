<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body style="background-image: url(https://www.finedininglovers.com/es/sites/g/files/xknfdk1706/files/styles/article_1200_800_fallback/public/2021-10/tipos-de-frutas%C2%A9iStock.jpg?itok=pKcl7VEK); background-repeat: no-repeat;background-size: cover;" >

    <div style="margin-left: 42%; margin-top:7%; color:rgb(0, 0, 0) " >
        <h1>Fruit Database</h1>
        
    </div>
    
    
    <style>
        table {
            margin-top: 5%;
            margin-left: 20%;
            border-collapse: collapse;
            width: 60%;
        }
    
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    
        th {
            background-color: #f2f2f2;
            color: #333;
        }
    
       /* tr:nth-child(even) {
            background-color: #f9f9f9;
        }*/
    
        tr:hover {
            background-color: #f5f5f5;
        }
        .custom-div {
        margin-left: 44.5%;
        margin-top: 10%;
        
    }

    .custom-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .custom-link:hover {
        background-color: #45a049;
    }
    </style>
    
    <div>
        <table border="1px">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($frutas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Precio}}</td>
                    <td>{{$item->Cantidad}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="custom-div">
        <a class="custom-link" href="{{url('/frutas/create')}}">Ingresar Fruta</a>
    </div>

   



    
</body>
</html>