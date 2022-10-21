<x-layout page="Login">
    <x-slot name="btn">
        <a href="{{route('register')}}">Criar conta</a>
    </x-slot>
        <section class="createTask">
        <form method="POST" action="{{route('login_action')}}">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $erro )
                    <p>{{$erro}}</p>
                @endforeach
            @endif
           <x-form.text_input name='email' label="Seu email" place="Seu email" type="email" />
           <x-form.text_input name='password' label="Sua senha" place="Sua senha" type="password" />
            <div class="inputArea btn">
                <x-form.button_input type="submit" style="#6143ff">Logar</x-form.button_input>
            </div>
        </form>
    </section>
</x-layout>
