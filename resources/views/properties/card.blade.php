<div class="card">
    <div class="card-body">
        <div class="card-title">
            <a href="/">{{ $property->title }}</a>
        </div>
        <p class="card-text"> {{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="fw-bold text-primary" style="font-size: 1.4rem">
            {{ number_format($property->price, '2', ',', " ") }} F CFA
        </div>
    </div>
</div>