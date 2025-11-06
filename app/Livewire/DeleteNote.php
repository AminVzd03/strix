<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteNote extends Component
{
    public $noteTitle;
    public $noteId;
    public function deleteNote(){

        auth()->user()
            ->notes()
            ->findOrFail($this->noteId)
            ->delete();
        redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.notes.delete-note');
    }
}
