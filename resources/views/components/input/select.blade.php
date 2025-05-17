<div class="form-group">
    @if($label)
        <label for="{{ $name }}" class="form-control-label">
            {{ $label }}
        </label>
    @endif
     <select
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes->merge(['class' =>  'form-control form-select ' . ($errors->has($name) ? 'is-invalid' : '')]) }}
        >
            <option value="" selected>Choose...</option>
            @foreach($options as $key => $text)
            <option value="{{ $key }}" {{ old($name, $value) == $key ? 'selected' : '' }}>
                {{ $text }}
            </option>
            @endforeach
     </select>

    @error($name)
         <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
