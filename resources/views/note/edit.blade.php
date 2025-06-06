<x-lauout>
    <div class="note-container single-note">
        <h1>Редактирование заметки</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
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
