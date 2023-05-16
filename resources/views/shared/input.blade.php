@php
    $type ??= 'text';
    $class ??= 'col';
    $name ??= '';
    $value ??= '';
    $label ??= ucFirst($name);
    $placeholder ??= null;
@endphp


<div @class(['form-group mt-3', $class ])>
        <label for="{{ $name }}">{{ $label }}</label>
    @if ($type === "textarea")
        <textarea class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}" >
    @endif

    @include('shared.error')
</div>

