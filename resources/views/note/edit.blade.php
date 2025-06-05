<x-lauout>
    <div class="note-container single-note">
        <h1>Редактирование заметки</h1>
        <form action="{{ route('note.edit', $note) }}" method="POST" class="note">
            <textarea name="note" rows="10" class="note-body" placeholder="Введите свою заметку здесь">
                {{ $note->note }}
            </textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Отмена</a>
                <button class="note-submit-button">Сохранить</button>
            </div>
        </form>
    </div>
</x-lauout>
