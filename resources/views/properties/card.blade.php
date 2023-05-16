<div class="card">
    <div class="card-body">
        <div class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property ]) }}">{{ $property->title }}</a>
            {{-- @dump($property->options) --}}
            {{-- <span class="badge badge-pill badge-dark">{{ $property->options->name }}</span> --}}
        </div>
        <p class="card-text"> {{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="fw-bold text-primary" style="font-size: 1.4rem">
            {{ $property->getFormatedPrice($property->price) }}
        </div>
    </div>
</div>