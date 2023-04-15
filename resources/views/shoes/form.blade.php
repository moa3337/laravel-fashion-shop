@extends('layouts.app')

@section('title', $shoe->id ? 'modifica il prodotto' : 'Aggiungi una nuova scarpa')

@section('actions')
<div>
    <a href="{{ route('index') }}">
        Torna alle scarpe
    </a>
{{--
    @if ($shoe->id)
        <a href="{{ route('shoes.show', $shoe) }}" class="ms-3">
            Mostra scarpa
        </a>   
    @endif
</div>
@endsection

@section('content')

@include('layouts.partials.errors')

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
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" />
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
    
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control" />
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="preview">
                    <img src="{{ $shoe->getImageUri() }}" class="w-25" alt="">
                </div>
            </div>

            <div class="col">
                <label for="text" class="form-label">Text</label>
                <textarea type="text" name="text" id="text" class="form-control" rows="4">
                </textarea>
                @error('text')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input class="mt-3" type="submit" class="" value="salva"/>
        </form>
    </div>
</section>
@endsection