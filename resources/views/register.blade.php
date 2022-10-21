<x-layout page="Registrar">
    <x-slot name="btn">
        <a href="{{route('login')}}">Logar</a>
    </x-slot>
        <section class="createTask">
        <form method="POST" action="{{route('register_action')}}">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $erro )
                    <p>{{$erro}}</p>
                @endforeach
            @endif
           <x-form.text_input name='name' label="Seu nome" place="Seu nome" />
           <x-form.text_input name='email' label="Seu email" place="Seu email" type="email" />
           <x-form.text_input name='password' label="Sua senha" place="Sua senha" type="password" />
           <x-form.text_input name='password_confirmation' label="Confirme a senha" place="Confirme a senha" type="password" />
            <div class="inputArea btn">
                <x-form.button_input type="submit" style="#6143ff">Criar usuário</x-form.button_input>
            </div>
        </form>
    </section>
</x-layout>
