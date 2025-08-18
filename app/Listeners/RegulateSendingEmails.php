<?php

namespace App\Listeners;

use App\Events\NoteCreated;
use App\Mail\SendNoteMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class RegulateSendingEmails
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NoteCreated $event): void
    {
            if($event->note['send_date']== null) {
               Mail::to($event->note['recipient_email'])->send(new SendNoteMail($event->note));

            }
    }
}
