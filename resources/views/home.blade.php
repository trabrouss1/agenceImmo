@extends('base')

@section('title', "Nos derniers biens")

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