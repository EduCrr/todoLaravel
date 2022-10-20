<div class="inputArea">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <input  value="{{$valor ?? ''}}" type={{empty($type) ? 'text' : $type}} placeholder="{{ $place ?? '' }}" name="{{ $name }}" id="{{ $name }}" />
</div>