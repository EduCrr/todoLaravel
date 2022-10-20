<x-layout page="Criar tarefa">
    <x-slot name="btn">
        <a href="{{route('home')}}">Home</a>
    </x-slot>
    <section class="createTask">
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
           <x-form.text_input name='title' label="Título" place="Título" />
           <x-form.text_input name='due_date' label="Data de validação" place="" type="datetime-local" />
           <x-form.select_input name='category_id' label="Categoria" place="">
            @foreach ($categories as $item)
                <option value="{{$item->id}}">{{ $item->title }}</option>
            @endforeach
           </x-form.select_input>
           <x-form.textarea_input name='description' label="Descrição" place="Descrição"/>
            <div class="inputArea btn">
                <x-form.button_input  type="reset" style="#999">Resetar</x-form.button_input>
                <x-form.button_input type="submit" style="#6143ff">Criar Tarefa</x-form.button_input>
            </div>
        </form>
    </section>
</x-layout>
