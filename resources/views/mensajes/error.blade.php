@if ($errors->get('nombre') || $errors->get('codigo')) 
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="card-title">Recomendaciones</div>
            <p class="card-category">Te mostramos algunos de los nombres que ya estan registrados</p>
        </div>
        <div class="card-body pb-0 overflow-auto">
            @foreach ($sugerencias as $sugerencia)
                <div class="d-flex">
                    <div class="flex-1 pt-1 ml-2">
                        <h3 class="fw-bold mb-1 "><p>Nombre: {{$sugerencia->nombre}}</p></h5>
                        <small class="text-muted">Fecha: {{$sugerencia->created_at}}</small>
                    </div>
                </div>
                <div class="separator-dashed"></div>
            @endforeach 
        </div>
    </div>
@elseif($errors)
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="card-title">Recomendaciones</div>
            <p class="card-category">Si no poses la información para llenar un campo puedes intentar con 3 puntos ejemplo ...</p>
        </div>
    </div>
@endif

