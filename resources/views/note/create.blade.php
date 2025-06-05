<x-lauout>
    <div class="note-container single-note">
        <h1>Создание заметки</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            <textarea name="note" rows="10" class="note-body" placeholder="Введите свою заметку здесь"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Отмена</a>
                <button class="note-submit-button">Сохранить</button>
            </div>
        </form>
    </div>
</x-lauout>
