<x-lauout>
    <div class="note-container single-note">
        <h1>Редактирование заметки</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note d-flex flex-column">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body border border-secondary rounded" placeholder="Введите свою заметку здесь">
                {{ $note->note }}
            </textarea>
            <div class="note-buttons btn-group mt-2">
                <a href="{{ route('note.index') }}" class="note-cancel-button btn btn-secondary">Отмена</a>
                <button class="note-submit-button btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
</x-lauout>
