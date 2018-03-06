<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comidas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h> Comidas</h>
    @if($exito !=null)
    @if($exito == 1)
    <p>
        se ha agregado una comida
    </p>
    @else
    <p> 
        no se a podido agregar comida
    </p>
    @endif
    @endif
    <h1>
        <a href="{{route('comidas.create')}}">
            <button> Agregar comida </button>
    </a>
  
    
</h1>
    <table>
        <thead>
            <tr>
<th>Nombre</th>
<th>Precio</th>
<th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comidas as $comida)
            <tr>
            <td>{{$comida->nombre}}</td>
            <td>{{$comida->precio}}</td>
            <td><button>editar</button></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>