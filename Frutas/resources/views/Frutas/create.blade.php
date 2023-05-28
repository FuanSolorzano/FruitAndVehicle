<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<style>
    body {
        background-image: url(https://media.primicias.ec/2021/10/14110037/ECUADOR-FRUTAS-ESCALADA.jpg);
        background-color: #f5f5f5;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    button {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<body>
    <form action="{{url('/frutas')}}" method="post">
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" name="Nombre" placeholder="Ingrese el nombre">
        </div>
        <div>
            <label>Precio</label>
            <input type="float" name="Precio" placeholder="Ingrese el precio">
        </div>
        <div>
            <label>Cantidad</label>
            <input type="number" name="Cantidad" placeholder="Ingrese la cantidad">
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>