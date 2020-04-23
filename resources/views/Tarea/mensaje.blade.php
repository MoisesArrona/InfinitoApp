<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @if ($tarea['estatus'] == 'inicio')
        <div class="wrapper">
            <div class="card">
                <h1 class="card__title">¡Alerta!</h1>
                <p class="card__desc">Se a levantado una tarea.</p>
                <p class="card__desc">Nombre de la es tarea: {{$tarea['nombre']}}</p>
                <p class="card__desc">Descripcion: {{$tarea['descripcion']}}</p>
                <p class="card__desc">Estatus: {{$tarea['estatus']}}</p>
            </div>
        </div>
    @elseif($tarea == 'proceso')
        <div class="wrapper">
            <div class="card">
                <h1 class="card__title">¡Alerta!</h1>
                <p class="card__desc">Se esta atendiendo la tarea.</p>
                <p class="card__desc">Nombre del tarea: {{$tarea['nombre']}}</p>
                <p class="card__desc">Descripcion: {{$tarea['descripcion']}}</p>
                <p class="card__desc">Estatus: {{$tarea['estatus']}}</p>
            </div>
        </div>
    @else
        <div class="wrapper">
            <div class="card">
                <h1 class="card__title">¡Alerta!</h1>
                <p class="card__desc">Se ha finalizado la tarea.</p>
                <p>Inicia sesion para saber mas detalles</p>
                <p class="card__desc">Nombre del tarea: {{$tarea['nombre']}}</p>
                <p class="card__desc">Descripcion: {{$tarea['descripcion']}}</p>
                <p class="card__desc">Estatus: {{$tarea['estatus']}}</p>
            </div>
        </div>
    @endif

</body>
</html>