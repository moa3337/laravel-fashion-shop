@extends("layouts.app")

@section('title', $newShoe->title)

@section('actions')
    <a class="btn btn-primary" href="{{ route('index') }}">Torna ai progetti</a>
    <a class="btn btn-primary" href="{{ route('shoes.edit', $shoe) }}">Modifica progetto</a>
@endsection

@section('content')

    <section>
        <h3></h3>
        
    </section> 
@endsection