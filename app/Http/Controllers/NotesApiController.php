<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteApi\StoreRequest;
use App\Http\Requests\NoteApi\UpdateRequest;
use App\Http\Resources\NoteApiResource;
use App\Models\Note;

class NotesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return NoteApiResource::collection($notes);
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
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $note = Note::create($data);

        return NoteApiResource::make($note);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return NoteApiResource::make($note);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Note $note)
    {
        $data = $request->validated();
        $note->append($data);
        return NoteApiResource::make($note);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return response()->json([
            "message"=> "done"
        ]);
    }
}
