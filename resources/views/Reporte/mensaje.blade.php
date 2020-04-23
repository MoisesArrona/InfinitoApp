<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @if ($reporte['estatus'] == 'inicio')
        <div class="wrapper">
            <div class="card">
                <h1 class="card__title">¡Alerta!</h1>
                <p class="card__desc">Se a levantado un ticket.</p>
                <p class="card__desc">Nombre del reporte: {{$reporte['nombre']}}</p>
                <p class="card__desc">Descripcion: {{$reporte['descripcion']}}</p>
                <p class="card__desc">Estatus: {{$reporte['estatus']}}</p>
            </div>
        </div>
    @elseif($reporte == 'proceso')
        <div class="wrapper">
            <div class="card">
                <h1 class="card__title">¡Alerta!</h1>
                <p class="card__desc">Se esta atendiendo tu ticket.</p>
                <p class="card__desc">Nombre del reporte: {{$reporte['nombre']}}</p>
                <p class="card__desc">Descripcion: {{$reporte['descripcion']}}</p>
                <p class="card__desc">Estatus: {{$reporte['estatus']}}</p>
            </div>
        </div>
    @else
        <div class="wrapper">
            <div class="card">
                <h1 class="card__title">¡Alerta!</h1>
                <p class="card__desc">Se ha finalizado tu ticket.</p>
                <p>Inicia sesion para saber mas detalles</p>
                <p class="card__desc">Nombre del reporte: {{$reporte['nombre']}}</p>
                <p class="card__desc">Descripcion: {{$reporte['descripcion']}}</p>
                <p class="card__desc">Estatus: {{$reporte['estatus']}}</p>
            </div>
        </div>
    @endif

</body>
</html>