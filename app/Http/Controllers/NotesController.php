<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Отобразите список ресурсов.
     */
    public function index()
    {
        $notes = Note::query()->orderBy('created_at', 'desc')->paginate(6);
        return view('note.index', ['notes' => $notes]);
    }

    /**
     * Показать форму для создания нового ресурса.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Сохраните только что созданный ресурс в хранилище.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'note' => ['required', 'string'],
        ]);

        $note = Note::create($data);

        return to_route('note.show', $note)->with('message', 'Заметка создана');
    }

    /**
     * Отобразите указанный ресурс.
     */
    public function show(Note $note)
    {
        return view('note.show', ['note' => $note]);
    }

    /**
     * Показать форму для редактирования указанного ресурса.
     */
    public function edit(Note $note)
    {
        return view('note.edit', ['note'=> $note]);
    }

    /**
     * Обновите указанный ресурс в хранилище.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Удалите указанный ресурс из хранилища.
     */
    public function destroy(Note $note)
    {
        //
    }
}
