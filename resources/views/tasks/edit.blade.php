<x-layout page='OrganEasy: Login'>

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Editar tarefa</h1>
        <form method="POST" action="{{ route('task.edit_action') }}">
            @csrf

            <input type="hidden" name="id" value="{{ $task->id }}" />

            <x-form.checkbox_input name="is_done" checked="{{ $task->is_done }}" label="Tarefa realizada ?" />

            <x-form.text_input type="datetime-local" name="due_date" label="Data de realização"
                value="{{ $task->due_date }}" />

            <x-form.select_input name="category_id" label="Categoria">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $task->category_id) selected @endif>
                        {{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input label="Descrição" name="description" placeholder="Digite a descrição da tarefa"
                value="{{ $task->description }}" />

            <x-form.form_button resetTxt="Resetar" submitTxt="Atualizar Tarefa" />
        </form>
    </section>

</x-layout>
