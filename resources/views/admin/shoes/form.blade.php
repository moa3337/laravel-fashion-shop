@extends('layouts.app')

@section('title', $shoe->id ? 'modifica il prodotto' : 'Aggiungi una nuova scarpa')

@section('actions')
    <div>
        <a href="{{ route('shoes.index') }}">
            Torna alle scarpe
        </a>


        @if ($shoe->id)
            <a href="{{ route('shoes.show', $shoe) }}" class="ms-3">
                Mostra scarpa
            </a>
        @endif
    </div>
@endsection

@section('content')

    {{-- @include('layouts.partials.errors') --}}

    <section class="card">
        <div class="card-body">

            @if ($shoe->id)
                <form method="POST" action="{{ route('shoes.update', $shoe) }}" class="row" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form method="POST" action="{{ route('shoes.store') }}" class="row" enctype="multipart/form-data">
            @endif
            @csrf

            <div class="col">
                <label for="model" class="form-label">Modello</label>
                <input type="text" name="model" id="model" class="form-control" />
                @error('model')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="type" class="form-label">Tipo</label>
                <input type="text" name="type" id="type" class="form-control" />
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="=number" class="form-label">Numero</label>
                <input type="text" name="=number" id="=number" class="form-control" />
                @error('number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="color" class="form-label">Colore</label>
                <input type="text" name="color" id="color" class="form-control" />
                @error('color')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="quantity" class="form-label">Quantita'</label>
                <input type="text" name="quantity" id="quantity" class="form-control" />
                @error('quantity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror


                <label for="image" class="form-label">Immagine</label>
                <input type="file" name="image" id="image" class="form-control" />
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="preview">
                    <img src="{{-- $shoe->image --}}" class="w-25" alt="">
                </div>
            </div>

            <input class="mt-3" type="submit" class="" value="salva" />
            </form>
        </div>
    </section>
@endsection
