<x-layout page='OrganEasy: Login'>

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar tarefa</h1>
        <form method="POST" action="{{ route('task.create_action') }}">
            @csrf

            <x-form.text_input name="title" label="Titulo" placeholder="Digite o titulo da tarefa..." />

            <x-form.text_input type="datetime-local" name="due_date" label="Data de realização" placeholder="..." />

            <x-form.select_input name="category_id" label="Categoria">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input label="Descrição" name="description" placeholder="Digite a descrição da tarefa" />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar tarefa" />
        </form>
    </section>

</x-layout>
