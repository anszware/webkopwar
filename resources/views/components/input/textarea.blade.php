<div class="form-group">
    @if($label)
        <label for="{{ $name }}" class="form-control-label">
            {{ $label }}
        </label>
    @endif
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="3"
        {{ $attributes->merge(['class' =>  'form-control ' . ($errors->has($name) ? 'is-invalid' : '']) }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
         <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
