<div class="inputArea">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
   <select  value="{{$valor ?? ''}}" name="{{ $name }}" id="{{ $name }}">
        <option selected disabled value="">Selecione a Categoria</option>
        {{ $slot }}
    </select>
</div>