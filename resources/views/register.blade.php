<x-layout page='OrganEasy: Login'>

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('user.register_action') }}">
            @csrf

            <x-form.text_input name="name" label="Usuário" placeholder="Nome de usuário" />

            <x-form.text_input type="email" name="email" label="Email" placeholder="example@email.com" />

            <x-form.text_input type="password" name="password" label="Senha"
                placeholder="Não use senhas de outras redes sociais" />

            <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha"
                placeholder="Confirme sua senha" />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />
        </form>
    </section>

</x-layout>
