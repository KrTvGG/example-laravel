<x-lauout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Заметка от: {{ (new DateTime(($note->created_at)))->format('d.m.Y') }}</h1>
            <div class="note-buttons btn-group mb-2">
                <a href="{{ route('note.index') }}" class="note-cancel-button btn btn-secondary">Назад</a>
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button btn btn-success">Редактировать</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST" class="btn btn-danger">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Удалить</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body h5">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-lauout>
