<?php

use App\Models\Note;
use function Livewire\Volt\{state};
protected $listeners = ['noteDeleted' => 'refreshNotes'];


$userId = auth()->user()->id;
state(['notes' => fn() => Note::where('user_id', $userId)->get()]);
public function refreshNotes()
{
    // reload notes from DB
    $this->notes = Note::latest()->get();
}

?>
<ul class="list bg-base-100 rounded-box shadow-md mx-auto w-[85vw] max-w-[85%] py-4 mt-5">

    <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Your Notes</li>

    <div>
        @foreach($notes as $note)
            <li class="list-row">
                <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/1@94.webp"/>
                </div>
                <div>
                    <div class="text-rose-300">{{$note->title}}</div>
                </div>
                <p class="list-col-wrap text-xs">
                    {{$note->body}}
                </p>
                @if($note->is_sent == 0)
                    <p class="text-red-500">Will be sent on : {{$note->send_date}}</p>
                @else
                    <p class="text-green-700">Message is sent</p>
                @endif
                <button class="btn btn-square btn-ghost">
                    <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none"
                           stroke="currentColor">
                            <path d="M6 3L20 12 6 21 6 3z"></path>
                        </g>
                    </svg>
                </button>
                <button class="btn btn-square btn-ghost">
                    <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none"
                           stroke="currentColor">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                        </g>
                    </svg>
                </button>
                <livewire:notes.delete-note :id="$note->id"/>

            </li>

        @endforeach
    </div>


</ul>
