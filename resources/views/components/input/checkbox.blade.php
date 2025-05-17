<div class="form-group">
    <div class="form-check form-check-inline">
        <div class="custom-control custom-checkbox">
            <input
                type="checkbox"
                name="{{ $name }}"
                id="{{ $name }}"
                value="1"
                {{ old($name) ? 'checked' : '' }}
                {{ $attributes->merge(['class' =>  'custom-control-input' . ($errors->has($name) ? 'is-invalid' : '')]) }}
            >
            @if($label)
                <label for="{{ $name }}" class="form-control-label">
                    {{ $label }}
                </label>
            @endif
        </div>
        @error($name)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>
</div>
