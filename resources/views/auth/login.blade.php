@extends('base')

@section('title', 'Se connecter')

@section('content')
    <div class="mt-4 container">
        <h1>@yield('title')</h1>

        @include('shared.flash')

        <form action="{{ route('login') }}" method="post">
            @csrf
                @include('shared.input', ['placeholder' => 'nom d\'utilisateur', 'type' => 'email', 'class' => 'col', 'name' => 'email', 'label' => 'Email'])
                @include('shared.input', ['placeholder' => 'Mot de passe', 'type' => 'password', 'class' => 'col', 'name' => 'password', 'label' => 'Mot de passe'])
            <div>
                <button class="btn btn-primary btn-sm my-4">Se connecter</button>
            </div>
        </form>
    </div>
@endsection