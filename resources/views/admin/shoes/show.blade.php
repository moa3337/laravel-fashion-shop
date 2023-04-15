@extends("layouts.app")
@section('title', $shoe->model)

@section('actions')
    <a class="btn btn-primary" href="{{ route('shoes.index') }}">Torna alle scarpe</a>
    <a class="btn btn-primary" href="{{ route('shoes.edit', $shoe) }}">Modifica prodotto</a>
@endsection

@section('content')
    
    <section class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5>{{ $shoe->model }}</h5>
                    <small><strong>Tipo scarpa: </strong>{{ $shoe->type }}</small><br>
                    <small><strong>Numero scarpa: </strong>{{ $shoe->number }}</small><br>
                    <small><strong>Colore: </strong>{{ $shoe->color }}</small><br>
                    <small><strong>Quantità disponibile: </strong>{{ $shoe->quantity }}</small><br>
                    <small class="text-light bg-success p-1">
                        <strong>Prodotto disponibile in magazino</strong>
                    </small>
                </div>
                <div class="col-6">
                    <img src="{{ $shoe->image }}" class="w-50" alt="">
                </div>
            </div>

        </div>
        
    </section> 
@endsection