<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{

    const FORMAT_DATE = "d.m.Y H:i";

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

        $data['user_id'] = 1;
        $note = Note::create($data);

        $text = "<b>Создана заметка</b>".PHP_EOL.PHP_EOL."Дата создания заметки: ".$this->getFormateDate($note->created_at).PHP_EOL."Текст заметки: ".$note->note;
        $this->sendMessageTelegramBot($text);

        return to_route('note.show', $note)->with('message', 'Заметка создана');
    }

    /**
     * Отобразите указанный ресурс.
     */
    public function show(Note $note)
    {
        $note = Note::with('comments')->find($note->id);
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
        $data = $request->validate([
            'note' => ['required', 'string'],
        ]);

        $note->update($data);

        $text = "<b>Обновлена заметка</b>".PHP_EOL.PHP_EOL."Дата создания заметки: ".$this->getFormateDate($note->created_at).PHP_EOL."Дата изменения заметки: ".$this->getFormateDate($note->updated_at).PHP_EOL."Текст заметки: ".$note->note;
        $this->sendMessageTelegramBot($text);

        return to_route('note.show', $note)->with('message','Заметка обновлена');
    }

    /**
     * Удалите указанный ресурс из хранилища.
     */
    public function destroy(Note $note)
    {
        $text = "<b>Удалена заметка</b>".PHP_EOL.PHP_EOL."Дата удаления заметки: ".$this->getFormateDate(null).PHP_EOL."Текст заметки: ".$note->note;
        $this->sendMessageTelegramBot($text);

        $note->delete();

        return to_route('note.index')->with('message','Заметка удалена');
    }

    private static function sendMessageTelegramBot(string $text) {
        $chatId = env('ID_CHAT');
        $apiToken = env('API_TOKEN_TG');
        if (!$chatId && !$chatId) return;
        $request = \Illuminate\Support\Facades\Http::post("https://api.telegram.org/bot$apiToken/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'html'
        ]);
    }

    private static function getFormateDate(string|null $date): string {
        if (is_null($date))
            return (new \DateTime())->format(self::FORMAT_DATE);
        else
            return (new \DateTime($date))->format(self::FORMAT_DATE);
    }
}
