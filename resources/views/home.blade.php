@extends('base')

@section('title', "Nos derniers biens")

@guest
    @section('nav')
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('login') }}" method="get">
                        @csrf
                        <button class="nav-link nav-link btn-primary border-4 text-light">Se connecter</button>
                    </form>
                </li>
            </ul>
    @endsection
@endguest


@auth
    @section('nav')
        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="nav-link btn-primary border-4 text-light">Se déconnecter</button>
                </form>
            </li>
        </ul>
    @endsection
@endauth

@section('content')
        <div class="bg-light p-5 mb-5 text-center">
            <div class="container">
                <h1>Agence Lorem, ipsum.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facilis eligendi corporis doloremque eum, qui accusamus, ad itaque voluptatem nihil iusto aperiam harum maiores provident dolorem officia nobis deserunt in ipsa eius quisquam fuga non? Hic quam amet officia dolorem sunt voluptatum! Saepe magnam soluta eius. Nemo assumenda vero saepe.</p>
            </div>
        </div>

        <div class="container">
            <h2>Nos derniers biens</h2>
            <div class="row">
                @foreach ($properties as $property)
                    <div class="col">
                        @include('properties.card')
                    </div>
                @endforeach                
            </div>
        </div>
@endsection
