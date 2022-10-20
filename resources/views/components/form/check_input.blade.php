<div class="inputArea">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <input {{  $checked ? 'checked' : ''  }} value="1" type="checkbox"  name="{{ $name }}" id="{{ $name }}" />
</div>