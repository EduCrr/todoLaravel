<x-layout>
    <!--BOTAO COMPONENTE!-->
    <x-slot name="btn">
        <a href="{{route('task.create')}}">Criar tarefa</a>
        <a href="/logout">Sair</a>
    </x-slot>
    <section class="graph">
        <div class="graphHeader">
            <div class="progress">
                <h2>Progresso do dia</h2>
            </div>
            <span class="line"></span>
            <div class="date">
                <img src="/assets/images/icon-prev.png"/>
                    19
                <img src="/assets/images/icon-next.png"/>
            </div>
        </div>
        <div class="graphSubtitle">tarefas 
        </div>
        <div class="graphPlaceholder"></div>
        <div class="tasksLeftFooter">
            <img src="/assets/images/icon-info.png"/>
            Restam 3 tarefas
        </div>
    </section>
    <section class="list">
        <div class="listHeader">
            <form method="get" action="{{route('home')}}">
                <select id="selectTeste" class="listSelect" name="category_id">
                    <option value="0">Todas as tarefas</option>
                        @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{ $item->title }}</option>
                    @endforeach
                </select>
                <input type="submit" value="teta"/>
            </form>
        </div>
        <div class="taskList">

            <!-- @php
                echo $tasks;
            @endphp
           -->
            @foreach ($tasks as $item )
                <x-task :data=$item />
            @endforeach

            
        </div>
    </section>
</x-layout>