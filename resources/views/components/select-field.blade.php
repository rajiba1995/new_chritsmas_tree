<select name="{{ $name }}" class="{{ $class }}" aria-label="{{ $ariaLabel }}">
    <option value="" {{ $selected ? '' : 'selected' }} class="text-textmuted text-sm">{{ $selectedText }}</option>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" {{ ($selected == $value) ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>
