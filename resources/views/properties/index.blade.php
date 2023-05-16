@extends('base')


@section('title', 'Tous nos biens')


@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form method="get" class="container d-flex gap-2">
            @include('shared.input', ['placeholder' => 'Surface minimum', 'name' => 'surface', 'type' => 'number' ,'label' => '', 'value' => $input['surface'] ?? ''])
            @include('shared.input', ['placeholder' => 'Nombre de piéce mini', 'name' => 'rooms', 'type' => 'number' ,'label' => '', 'value' => $input['rooms'] ?? ''])
            @include('shared.input', ['placeholder' => 'Budegt Max', 'name' => 'price', 'type' => 'number' ,'label' => '', 'value' => $input['price'] ?? ''])
            @include('shared.input', ['placeholder' => 'Mot clef', 'name' => 'title', 'label' => '', 'value' => $input['title'] ?? ''])
            <button class="btn btn-primary btn-sm flex-grow-0"> Rechercher </button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($properties as $property )
                <div class="col-3 my-4">
                    @include('properties.card')
                </div>
            @empty
                <div class="col mb-4">
                    <h1 class="bg-dark text-danger text-lg-center">Aucun bien ne correspond à votre recherche.</h1>
                </div>
            @endforelse        
        </div>

        <div class="my-4">
            {{ $properties->links() }}
        </div>
    </div>

@endsection