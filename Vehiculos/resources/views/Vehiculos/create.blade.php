<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f1f1f1;
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUMrZsNQHA5iymIH2RNal4Rst7skwdhdYxsg&usqp=CAU); 
       
    }

    form {
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 4px;
        width: 300px;
        margin: 0 auto;
        margin-top: 8%;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #ddd;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <form action="{{url('/vehiculos')}}" method="post">
        @csrf
        <div>
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="Marca" placeholder="Ingrese la marca">
        </div>
        <div>
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="Modelo" placeholder="Ingrese el modelo">
        </div>
        <div>
            <label for="tipo">Tipo</label>
            <input type="text" id="tipo" name="Tipo" placeholder="Ingrese el tipo">
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>