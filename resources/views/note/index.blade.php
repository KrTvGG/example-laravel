<x-lauout>
    <div class="note-container">
        <div class="d-flex justify-content-center">
            <a href="{{ route('note.create') }}" class="new-note-btn btn btn-success">Создать заметку</a>
        </div>
        <div class="notes row mt-5 mb-5">
            @foreach ($notes as $note)
                <div class="note col-xl-4 col-md-6 col-sm-12 mt-3">
                    <div class="note-body h5">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-buttons btn-group mt-2">
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button btn btn-primary">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button btn btn-secondary">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST" class="btn btn-danger">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $notes->links() }}
    </div>
</x-lauout>