<?php

namespace App\Listeners;

use App\Events\NoteCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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

            }
    }
}
