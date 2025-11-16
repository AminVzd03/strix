<?php

namespace App\Livewire\Notes;

use App\Http\Requests\AddNoteFormReq;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class AddNote extends Component
{


    public $title, $body, $recipientEmail, $date, $time, $dateTime;

    public bool $sendNow = false;

    public function mount(): void
    {
        $this->dateTime = $this->sendDate();
    }
    public function sendDate(): ?Carbon
    {
        if(!$this->sendNow) {
            return  Carbon::parse("{$this->date} {$this->time}");
        }
        else{
            return now();
        }
    }

    public function save(): RedirectResponse
    {
        $form = new AddNoteFormReq;

        $validated = $this->validate(
            $form->rules(),
            $form->messages(),
            $form->attributes()
        );

        auth()->user()->notes()->create($validated);

        return redirect()->route('dashboard');
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.notes.add-note');
    }
}
