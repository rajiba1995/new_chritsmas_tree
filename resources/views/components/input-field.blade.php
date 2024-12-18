<!-- resources/views/components/input-field.blade.php -->
{{-- {{dd($value)}} --}}
    <input 
        type="{{ $type ?? 'text' }}" 
        name="{{ $name }}" 
        value="{{ $value ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" 
        aria-label="{{ $ariaLabel ?? '' }}"
        class="form-control {{ $size === 'sm' ? 'form-control-sm' : ($size === 'lg' ? 'form-control-lg' : '') }} {{ $class ?? '' }}"
        {{ $attributes->merge(['disabled' => $disabled ? 'disabled' : null, 'readonly' => $readonly ? 'readonly' : null]) }}
        @if($type === 'checkbox' && $checked) checked @endif
    />
