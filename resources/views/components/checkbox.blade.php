@php(
    $id = Str::uuid()
)

<div class="form-check">
    <input class="form-check-input" type="checkbox" id="{{ $id }} {{ $attributes->merge([
        'value' => 1
        ]) }}">
    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>