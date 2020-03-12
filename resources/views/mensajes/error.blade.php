@if ($error->any())
    <div class="card mb-4 py-3 border-bottom-danger">
        <div class="card-body">
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    </div>    
@endif