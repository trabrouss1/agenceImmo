@extends('admin.admin')


@section('title', $property->exists ? "Edition de ". $property->title : 'Créer un bien')


@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        
        @csrf
        @method($property->exists ? 'PUT' : 'POST')

        <div class="row">
            @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $property->title])
            <div class="col row">
                @include('shared.input', [ 'name' => 'surface', 'value' => $property->surface])
                @include('shared.input', ['label' => 'Prix', 'name' => 'price', 'value' => $property->price])
            </div>
        </div>
        @include('shared.input', ['type' => 'textarea' ,'label' => 'Description', 'name' => 'description', 'value' => $property->description])

        <div class="row">
            @include('shared.input', ['label' => 'Pièces', 'name' => 'rooms', 'value' => $property->rooms])
            @include('shared.input', ['label' => 'Chambre', 'name' => 'bedrooms', 'value' => $property->bedrooms])
            @include('shared.input', ['label' => 'Etage', 'name' => 'floor', 'value' => $property->floor])
        </div>

        <div class="row">
            @include('shared.input', ['label' => 'Ville', 'name' => 'city', 'value' => $property->city])
            @include('shared.input', ['label' => 'Adresse', 'name' => 'address', 'value' => $property->address])
            @include('shared.input', ['label' => 'Code postal', 'name' => 'postal_code', 'value' => $property->postal_code])
        </div>

        @include('shared.select', ['label' => 'Options', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true])

        @include('shared.checkbox', ['label' => 'Vendu' ,'name' => 'sold', 'value' => $property->sold, 'options' => $options])



        <button class="btn btn-primary mt-3">
            @if ($property->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>

@endsection