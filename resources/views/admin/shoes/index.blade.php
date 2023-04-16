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
                        </a>
                        <button class="bi bi-trash mx-2 text-danger" data-bs-toggle="modal"
                            data-bs-target="#delete-{{ $shoe->id }}"></button>
                    </td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>

    @section('modals')
        @foreach ($newShoe as $shoe)
            <div class="modal fade" id="delete-{{ $shoe->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $shoe->model }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Vuoi eliminare questa scarpa?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('shoes.destroy', $shoe) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Conferma</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection

    {{ $newShoe->links() }}
@endsection



{{-- utilizzare per avere bootstrap pagination gia' sistemata in AppServiceProvider --}}
{{-- {{$shoes->links()}} --}}
