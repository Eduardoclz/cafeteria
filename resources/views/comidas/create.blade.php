<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comidas</title>
</head>
<body>
    <h1> Nuevas comidas </h1> 

    <form method="POST"action="{{route('comidas.store')}}">
{{ csrf_field() }}
<label>Nombre:</label>
<input type="text"name="txtNombre" required> 
   <label>Precio:</label>
   <input type="text"name="txtPrecio" required> 
   <button type="submit">Agregar comida</button>
</form>
</body>
</html>
