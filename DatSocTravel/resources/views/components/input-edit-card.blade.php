@php
$_name = $attributes['name'];
$_label = $attributes['label'];
$_type = $attributes['type'] ?? 'text';
$_old_value = old($_name);

$_value = $attributes['value'] ?? '';
$_value = empty($_old_value) ? $_value : $_old_value;
@endphp
<div class="col-md-6">
    <div class="form-group">
        <label class="form-label" for="{{ $_name }}">{{ $_label }}
            <input type="{{ $_type }}" name="{{ $_name }}" class="form-control @error($_name) is-invalid @enderror"
                value="{{ $_value }}"/>
        </label>

        @error($_name)
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>