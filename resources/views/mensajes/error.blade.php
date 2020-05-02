@if ($errors->get('nombre') || $errors->get('codigo') || $errors->get('email')) 
    <div class="card shadow mb-4">
        <!--Validacion de variable-->
        @isset($sugerencias)
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
        @endisset
        <!--Validacion de variable-->
        @isset($usuarios)
            <div class="card-header">
                <div class="card-title">Recomendaciones</div>
                <p class="card-category">Te mostramos algunos de los correos que ya estan registrados</p>
            </div>
            <div class="card-body pb-0 overflow-auto">
                @foreach ($usuarios as $usuario)
                    <div class="d-flex">
                        <div class="flex-1 pt-1 ml-2">
                            <h3 class="fw-bold mb-1 "><p>Nombre: {{$usuario->email}}</p></h5>
                                <small class="text-muted">Fecha: {{$usuario->name}}</small>
                            <small class="text-muted">Fecha: {{$usuario->created_at}}</small>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>
                @endforeach 
            </div>
        @endisset
    </div>
@elseif($errors)
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="card-title">Recomendaciones</div>
            <p class="card-category">Si no poses la información para llenar un campo puedes intentar con 3 puntos ejemplo ...</p>
        </div>
    </div>
@endif