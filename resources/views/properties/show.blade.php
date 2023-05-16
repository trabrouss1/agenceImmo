@extends('base')

@section('title', 'Information sur ' . $property->title)

@section('content')
    <div class="container mt-4">
        <h1>{{ $property->title }}</h1>
        <h2>{{ $property->rooms }} pièces - {{ $property->surface }} m²</h2>

        <div class="text-primary fw-bold" style="font-size: 4rem;">
            {{ $property->getFormatedPrice($property->price) }}
        </div>

        <hr>

        <div class="mt-4">
            <h4>Intéressé par ce bien ?</h4>

            @include('shared.flash')
            <form action="{{ route('property.contact', $property) }}" class="vstack gap-3" method="post">
                @csrf
                <div class="row">
                    @include('shared.input', ['placeholder' => 'Nom', 'class' => 'col', 'name' => 'lastname', 'label' => 'Nom'])
                    @include('shared.input', ['placeholder' => 'Prénom', 'class' => 'col', 'name' => 'firstname', 'label' => 'Prénom'])
                </div>

                <div class="row">
                    @include('shared.input', ['placeholder' => 'Téléphone', 'type' => 'number', 'class' => 'col', 'name' => 'phone', 'label' => 'Téléphone'])
                    @include('shared.input', ['placeholder' => 'Email', 'type' => 'email', 'class' => 'col', 'name' => 'email', 'label' => 'Email'])
                </div>
                @include('shared.input', ['placeholder' => 'Email', 'type' => 'textarea', 'class' => 'col', 'name' => 'message', 'label' => 'Votre message'])
                <div class="mt-3">
                    <button class="btn btn-primary">Nous contacter</button>
                </div>

                <div class="mt-4">
                    <p> {!! $property->description !!} </p>
                    <div class="row">
                        <div class="col-8">
                            <h1>Caractéristique</h1>
                            <table class="table table-striped">
                                <tr>
                                    <td>Surface habitable</td>
                                    <td>{{ $property->surface }} m²</td>
                                </tr>
                                <tr>
                                    <td>Pièces</td>
                                    <td>{{ $property->rooms }} m²</td>
                                </tr>
                                <tr>
                                    <td>Chambre</td>
                                    <td>{{ $property->bedrooms }} m²</td>
                                </tr>
                                <tr>
                                    <td>Etage</td>
                                    <td>{{ $property->floor ?: 'Rez de chaussé' }} m²</td>
                                </tr>
                                <tr>
                                    <td>Localisation</td>
                                    <td>
                                        {{ $property->address }}<br>
                                        {{ $property->city }} ({{ $property->postal_code }})
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-4">
                            <h2>Spécifité</h2>
                            <ul class="list-group">
                                @foreach ($property->options as $option)
                                    <li class="list-group-item">{{ $option->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection