<?php

namespace App\Livewire\Notes;

use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class AddNote extends Component
{


    public $title, $body, $recipientEmail, $date, $time;
    public $dateTime = '';

    public bool $sendNow = false;

    public function dateTime(): ?Carbon
    {
        if(!$this->sendNow) {
            return $this->dateTime = Carbon::parse("{$this->date}{$this->time}");
        }
        return null;
    }

    public function save(): RedirectResponse
    {
        info($this->dateTime);

       $this->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'recipientEmail' => 'required|string',
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
