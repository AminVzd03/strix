<?php

use App\Models\Note;
use Livewire\Attributes\On;
use Carbon\Carbon;
use function \Livewire\Volt\{state};
use function \Livewire\Volt\{mount};
use function \Livewire\Volt\{on};
state(['userId' =>null , 'notes' => []]);

mount(function() {
    $this->userId = auth()->user()->id;
    $this->notes = Note::where('user_id',$this->userId)->get();
});

function formatDate($dateString)
{
    $date = Carbon::parse($dateString);
    $now = Carbon::now();

    if ($date->isFuture()) {
        return "Will be sent in ".$now->diffForHumans($date, [
            'syntax' => Carbon::DIFF_ABSOLUTE,
            'parts' => 1,
            'options' => Carbon::NO_ZERO_DIFF
        ]);
    }

    // For past dates, use the previous formatting
    return "Is sent on  ".$date->format('l M jS \a\t g a');
}

?>

<div>
    <ul class="list bg-base-100 rounded-box shadow-md mx-auto w-[85vw] max-w-[85%] py-4 mt-5">

        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Your Notes</li>
        <div>
            @foreach($notes as $note)

                <div class="w-[80%] max-w-4xl mx-auto mb-4">
                    <!-- Message Card -->
                    <div
                        x-data="{open: false}"
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl border border-gray-200">
                        <!-- Card Header -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center p-5 border-b border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-3 sm:mb-0">{{$note->title}}</h3>
                            <div class="flex space-x-3">
                                <!-- Edit Icon -->
                                <button class="text-blue-500 hover:text-blue-700 transition-colors p-2 rounded-full hover:bg-blue-50 flex items-center">
                                    <i class="fas fa-pencil-alt mr-2"></i>
                                    <span class="text-sm">Edit</span>
                                </button>
                                <!-- Delete Icon -->
                                <button
                                    x-on:click="open = ! open"
                                    class="text-red-500 hover:text-red-700 transition-colors p-2 rounded-full hover:bg-red-50 flex items-center">
                                    <i class="fas fa-trash mr-2"></i>
                                    <span class="text-sm" href="">Delete</span>
                                </button>
                                <div
                                    x-show="open" x-transition>
                                    <livewire:notes.delete-note :noteId="$note->id" :noteTitle="$note->title"/>
                                </div>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6">
                            <p class="text-gray-600 mb-6 leading-relaxed">
                            {{$note->body}}
                            </p>

                            <!-- Date with Checkmark -->
                            <div class="flex items-center text-gray-600 bg-gray-50 rounded-lg p-4 border border-gray-100">
                                <i class="fas fa-check-circle text-green-500 text-lg mr-3"></i>
                                <span class="font-medium">{{formatDate($note->send_date)}}</span>
                            </div>
                        </div>
                    </div>

                </div>


            @endforeach
        </div>


    </ul>
</div>
