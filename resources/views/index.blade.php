@extends('layouts.app')

@section('name', 'Shoes Store')

@section('content')
@dd($newShoe)
<section>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Quantità</th>
                </tr>
            </thead>
            <tbody>
                {{--
            @forelse ($newShoe as $shoe)
            
                <tr>
                    <th scope="row">{{ $shoe->id }}</th>
                    <td>{{ $shoe->model }}</td>
                    <td>{{ $shoe->type }}</td>
                    <td>{{ $shoe->number }}</td>
                    <td>{{ $shoe->color }}</td>
                    <td>{{ $shoe->quantity }}</td>
                    <td>
                        <div class="pic"><img src="{{ $shoe->image }}" alt=""></div>  
                    </td>
                    <td>
                        <a href="{{ route('shoes.show', $shoe) }}">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('shoes.edit', $newShoe) }}">
                            <i class="bi bi-pencil mx-2"></i>
                        </a>
                        <a href="{{ route('shoes.edit', $newShoe) }}" data-bs-toggle="modal" data-bs-target="#delete-post-modal-{{ $newShoe->id }}">
                            <i class="bi bi-trash mx-2 text-danger"></i>
                        </a>
                    </td>
                </tr>
            @empty
            
            @endforelse
            --}}
            </tbody>
        </table>
    </div>
</section>
    
@endsection