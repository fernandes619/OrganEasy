<x-layout page='OrganEasy: Login'>

    <section id="task_section">
        <h1>Login</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('user.login_action') }}">
            @csrf

            <x-form.text_input type="email" name="email" label="Email" placeholder="example@email.com" />

            <x-form.text_input type="password" name="password" label="Senha"
                placeholder="Não use senhas de outras redes sociais" />
            <x-form.form_button resetTxt="Limpar" submitTxt="Entrar" />
        </form>
    </section>

</x-layout>
