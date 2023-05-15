@php
    $class ??= 'col';
    $name ??= '';
    $value ??= '';
    $label ??= ucFirst($name);
@endphp


<div @class(['form-group mt-3', $class ])>
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}[]" id="{{ $name }}" multiple>
        <option>Selectionner une option</option>
        @foreach ($options as $k => $v)
            <option @selected($value->contains($k)) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>

    @include('shared.error')
</div>

