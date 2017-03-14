@if($errors->any())
    <div class="alert alert-danger">
        <h3>Información insuficiente, corrige los siguientes campos.</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
        </ul>
    </div>
@endif