@if (session('estatus'))
    <div class="card mb-4 py-3 border-bottom-success">
        <div class="card-body">
            {{session('estatus')}}
        </div>
    </div>
@endif