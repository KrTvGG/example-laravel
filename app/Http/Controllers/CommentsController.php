<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Note;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'comment' => ['required', 'string'],
            'note_id' => ['required', 'integer'],
        ]);

        Comments::create($data);

        $note = Note::find($request->note_id);
        return to_route('note.show', $note)->with('message', 'Комментарий создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comment)
    {
        $data = $request->validate([
            'comment' => ['required', 'string'],
        ]);

        $comment->update($data);

        $note = Note::find($comment->note_id);

        return to_route('note.show', $note)->with('message','Комментарий обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comment)
    {
        $note = Note::find($comment->note_id);

        $comment->delete();

        return to_route('note.show', $note)->with('message', 'Комментарий удален');
    }
}
