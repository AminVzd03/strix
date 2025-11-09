<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class Edit extends Component
{
    public function editNote($noteId) {
        $validatedData = $this->validate([
            'note' => 'required',]);
    }

    public function render()
    {
        return view('livewire.notes.edit');
    }
}
