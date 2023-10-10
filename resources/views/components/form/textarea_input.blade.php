<div class="inputArea">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <textarea placeholder="{{ $placeholder ?? '' }}" name="{{ $name }}" {{ empty($required) ? '' : 'required' }}>{{ $value ?? '' }}</textarea>
</div>
