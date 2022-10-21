<div class="task">
    <div class="title">
        <input id="check" type="checkbox" onclick="teste({{ $data->id }})"
            @if ($data->is_done)
                checked
            @endif
        >
        <div class="taskTitle">{{ $data->title ?? '' }}</div>
    </div>
    <div class="priotity">
        <div class="sphere" style="background-color: {{$data['category']->color}}"></div>
        <div>{{  $data['category']->title ?? ''  }}</div>
    </div>
        <div class="actions">
        <a href="{{route('task.edit', ['id' => $data['id']])}}"> <img src="/assets/images/icon-edit.png"/></a>
        <a href="{{route('task.delete', ['id' => $data['id']])}}"> <img src="/assets/images/icon-delete.png"/></a>
    </div>
</div>

