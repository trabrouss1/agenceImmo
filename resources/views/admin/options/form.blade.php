@extends('admin.admin')


@section('title', $option->exists ? "Edition de ". $option->name : 'Créer une option')


@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="post">
        
        @csrf
        @method($option->exists ? 'PUT' : 'POST')

        <div class="row">
            @include('shared.input', ['label' => 'Nom', 'name' => 'name', 'value' => $option->name])
        </div>

        <button class="btn btn-primary mt-3">
            @if ($option->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>

@endsection