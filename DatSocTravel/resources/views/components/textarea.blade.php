@php
$_name = $attributes['name'];
$_label = $attributes['label'];
$_type = $attributes['type'] ?? 'text';
$_old_value = old($_name);

$_value = $attributes['value'] ?? '';
$_value = empty($_old_value) ? $_value : $_old_value;
@endphp

<div class="mb-3">
    <label for="{{ $_name }}" class="form-label">
        {{ $_label }}</label>
        <textarea style="resize: none;" name="{{ $_name }}" class="form-control" id="{{ $_name }}" rows="5">{{ $_value }}</textarea>
    @error($_name)
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
