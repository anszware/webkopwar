<div class="form-group">
    @if($label)
        <label for="{{ $name }}" class="form-control-label">
            {{ $label }}
        </label>
    @endif
    <input
        type="password"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' =>  'form-control ' . ($errors->has($name) ? 'is-invalid' : '']) }}
    >

    @error($name)
         <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
