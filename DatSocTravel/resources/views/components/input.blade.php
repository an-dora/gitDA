@php
$_name = $attributes['name'];
$_label = $attributes['label'];
$_type = $attributes['type'] ?? 'text';
$_old_value = old($_name);

$_value = $attributes['value'] ?? '';
$_value = empty($_old_value) ? $_value : $_old_value;
@endphp

<div class="form-group mt-3">
    <div class="form-outline mb-4">
        <label  for="{{ $_name }}" class="form-label">{{ $_label }}</label>
        <input  id="{{ $_name }}"
                name="{{ $_name }}" 
                type="{{ $_type }}" 
                value="{{ $_value }}"
                class="form-control @error($_name) is-invalid @enderror" />
        @error($_name)
            <div class="text-danger">
                {{ $message }}
              </div>
        @enderror
    </div>
</div>
