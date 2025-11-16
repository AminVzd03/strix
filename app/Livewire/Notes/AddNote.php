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


public function save(AddNoteFormReq $req): RedirectResponse
{
        $req->validationResolved($this->dateTime);


        $note = [
            'title' => $this->title,
            'body' => $this->body,
            'recipient_email' => $this->recipientEmail,
            'send_date' => $this->dateTime,
        ] ;

        auth()->user()->notes()->create($note);
        return redirect()->route('dashboard');
  }
    public function render()
    {
        return view('livewire.notes.add-note');
    }
}
