@php
    $class ??= null;
    $name ??=null;
    $value ??= false;
    $label ??= null;
@endphp


<div @class(["form-check form-switch mt-2", $class])>
    <input type="hidden" value="0" name="{{ $name }}">
    <input @checked(old($name, $value)) type="checkbox" value="1" class="form-check-input @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" role="switch">
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>

    @include('shared.error')
</div>