<x-layout page="Editar tarefa">
    <x-slot name="btn">
        <a href="{{route('home')}}">Home</a>
    </x-slot>
    <section class="createTask">
        <form method="POST" action="{{route('task.edit_action', ['id' => $task->id])}}">
            @csrf
           <x-form.text_input name='title' label="Título" place="Título" valor="{{$task->title}}" />
           <x-form.check_input name='is_done' label="Tarefa feita?" checked="{{$task->is_done}}" />
           <x-form.text_input name='due_date' label="Data de validação" place="" type="datetime-local" valor="{{$task->due_date}}" />
           <x-form.select_input name='category_id' label="Categoria" place="">
            @foreach ($categories as $item)
                <option  @if($item->id === $task->category_id) selected @endif value="{{$item->id}}">{{ $item->title }}</option>
            @endforeach
           </x-form.select_input>
           <x-form.textarea_input name='description' label="Descrição" place="Descrição" valor="{{$task->description}}" />
            <div class="inputArea btn">
                <x-form.button_input  type="reset" style="#999">Resetar</x-form.button_input>
                <x-form.button_input type="submit" style="#6143ff">Atualizar Tarefa</x-form.button_input>
            </div>
        </form>
    </section>
</x-layout>
