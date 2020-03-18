@if ($errors->get('nombre'))
    
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recomendación</h6>
        </div>
        <div class="card-body">
            <p class="m-0 font-weight-bold text-primary">Estos son uno de los nombres que ya estan registrados</p>
            @foreach ($sugerencias as $sugerencia)
                <p>{{$sugerencia->nombre}}</p>
            @endforeach 
        </div>
    </div>  
@endif