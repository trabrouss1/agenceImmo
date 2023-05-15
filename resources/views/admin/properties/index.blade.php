@extends('admin.admin')

@section('title', 'Tous les biens')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter un bien</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Ville</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property) 
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->surface }}m²</td>
                    <td>{{ number_format($property->price, '2', ',', " ") }} F CFA</td>
                    <td>{{ $property->city }}</td>
                    <td>
                        <div class="d-flex justify-content-end w-100 gap-2">
                            <a href="{{ route('admin.property.edit', $property) }}" class="btn btn-sm btn-primary">Editer</a>
                            <form action="{{ route('admin.property.destroy', $property) }}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Etês-vous sûre de bien vouloir supprimer cette element?')" >Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $properties->links() }}

@endsection