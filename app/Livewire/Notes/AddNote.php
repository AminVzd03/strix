<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class AddNote extends Component
{


    public $title, $body, $recipientEmail;
    public $date = '';
    public $time = '';
    public bool $sendNow = false;

    #[\Livewire\Attributes\Computed]
    public function dateTime()
    {
        if(!$this->sendNow) {
            return \Carbon\Carbon::parse("{$this->date}{$this->time}");
        }
        return null;
    }

    public function save()
    {

        $this->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'recipientEmail' => 'required|string',
            'date' => 'date',

        ]);
        $note = [
            'title' => $this->title,
            'body' => $this->body,
            'recipient_email' => $this->recipientEmail,
            'send_date' => $this->dateTime ] ;

        auth()->user()->notes()->create($note);
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.notes.add-note');
    }
}
