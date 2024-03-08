<?php

namespace App\Http\Livewire\Notes;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateNote extends Component
{
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;
    public $noteIsPublished;

    public function submit()
    {
        $validated = $this->validate([
            /*'noteTitle' => 'required',*/
            'noteTitle' => ['required', 'string', 'min:3', 'max:255'],
            'noteBody' => ['required', 'string', 'min:10'],
            'noteRecipient' => ['required', 'email'],
            'noteSendDate' => ['required', 'date'],
        ]);

        $note = Auth::user()
            ->notes()
            ->create([
                'title' => $this->noteTitle,
                'body' => $this->noteBody,
                'recipient' => $this->noteRecipient,
                'send_date' => $this->noteSendDate,
                'is_published' => true, //default value for new notes.
            ]);

        redirect()->route('notes.index');
        // $this->emit('noteCreated', $note->id);
    }
}
