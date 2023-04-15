@extends('layouts.app')

@section('title', 'Le nostre Shoes')

@section('actions')
    <div>
        <a href="{{ route('shoes.create') }}">
            crea nuovo
        </a>
    </div>
@endsection
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Pic</th>
                <th scope="col">Modello</th>
                <th scope="col">Tipo</th>
                <th scope="col">Numero</th>
                <th scope="col">Colere</th>
                <th scope="col">Quantità</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($newShoe as $shoe)
                <tr>
                    <th scope="row">{{ $shoe->id }}</th>
                    <div class="pic">
                        <td>
                            <img src="{{ $shoe->image }}" class="w-25" alt="">
                        </td>
                    </div>
                    <td>{{ $shoe->model }}</td>
                    <td>{{ $shoe->type }}</td>
                    <td>{{ $shoe->number }}</td>
                    <td>{{ $shoe->color }}</td>
                    <td>{{ $shoe->quantity }}</td>
                    <td>

                        
                        <a href="{{ route('shoes.show', $shoe) }}">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('shoes.edit', $shoe) }}">
                            <i class="bi bi-pencil mx-2"></i>
                        </a>{{--
                        <a href="{{ route('admin.shoes.edit', $shoe) }}" data-bs-toggle="modal" data-bs-target="#delete-post-modal-{{ $project->id }}">
                        <i class="bi bi-trash mx-2 text-danger"></i>
                        </a>--}}
                    </td>
                </tr>
            @empty

            @endforelse      
        </tbody>       
    </table>
    {{ $newShoe->links() }} 
@endsection



{{-- utilizzare per avere bootstrap pagination gia' sistemata in AppServiceProvider --}}
{{-- {{$shoes->links()}} --}}