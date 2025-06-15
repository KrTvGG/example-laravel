<x-lauout>
    <div class="note-container single-note">
        <div class="note-header d-flex">
            <h1>Заметка от: {{ (new DateTime(($note->created_at)))->format('d.m.Y') }}</h1>
            <div class="note-buttons btn-group mb-2 ml-2">
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
        <div class="comments mt-3">
            <div class="top d-flex">
                <h2>
                    Комментарии
                    @if ($note->comments)
                        <span class="badge badge-secondary">{{ count($note->comments) }}</span>
                    @endif
                </h2>
                <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#createComment">
                    Создать комментарий
                </button>
            </div>


            <div class="list d-flex flex-column mt-3">
                @foreach ($note->comments as $index => $comment)
                    <div class="item h5 d-flex">
                        <div class="date text-primary mr-2">
                            {{ (new DateTime($comment->created_at, new DateTimeZone('UTC')))->setTimezone(new DateTimeZone('Europe/Moscow'))->format('d.m.Y H:i') }}
                        </div>
                        <p class="comment">
                            {{ $comment->comment }}
                        </p>
                        <div class="btns ml-auto btn-group">
                            <button 
                                type="button" 
                                class="btn btn-secondary ml-2" 
                                data-toggle="modal" 
                                data-target="#editComment{{ $index }}"
                            >
                                Edit
                            </button>
                            {{-- <a href="{{ route('note.edit', $note) }}" class="note-edit-button btn btn-secondary">Edit</a> --}}
                            <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="btn btn-danger">
                                @csrf
                                @method('DELETE')
                                <button class="note-delete-button">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal fade" id="editComment{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="createCommentTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Редактирование комментария от {{ (new DateTime($comment->created_at, new DateTimeZone('UTC')))->setTimezone(new DateTimeZone('Europe/Moscow'))->format('d.m.Y H:i') }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('comments.update', $comment) }}" method="POST" class="d-flex flex-column">
                                        @csrf
                                        @method('PUT')
                                        <textarea name="comment" rows="10" class="border border-secondary rounded" placeholder="Введите свою комментарий здесь">{{ $comment->comment }}</textarea>
                                        <div class="btn-group mt-2">
                                            <button class="btn btn-success">Сохранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal fade" id="createComment" tabindex="-1" role="dialog" aria-labelledby="createCommentTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Создание комментария</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('comments.store') }}" method="POST" class="d-flex flex-column">
                    @csrf
                    <input type="hidden" name="note_id" value="{{ $note->id }}">
                    <textarea name="comment" rows="10" class="border border-secondary rounded" placeholder="Введите свою комментарий здесь"></textarea>
                    <div class="btn-group mt-2">
                        <button class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-lauout>
