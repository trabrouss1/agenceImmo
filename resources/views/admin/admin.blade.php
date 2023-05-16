<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Adminstration</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Acceuil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @php
                $route = request()->route()->getName();
            @endphp

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route("admin.property.index") }}" @class(['nav-link', 'active' => str_contains($route, 'property.')]) >Gérer les biens</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.option.index") }}" @class(['nav-link', 'active' => str_contains($route, 'option.')]) >Gérer les options</a>
                    </li>
                </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        @include('shared.flash')

        @yield('content')
    </div>

    <script>
        new TomSelect('select[multiple]', {plugins: {remove_button: {title: 'Supprimer'}}})
    </script>
</body>

</html>