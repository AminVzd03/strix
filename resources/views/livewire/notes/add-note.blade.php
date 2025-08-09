<?php

use Livewire\Volt\Component;
use \App\Events\NoteCreated;
new class extends Component {
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
         \App\Events\NoteCreated::dispatch($note);
        return redirect()->route('dashboard');
    }
}; ?>

<div class="min-h-screen bg-gray-790 flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-xl bg-rose-500 rounded-2xl shadow-xl p-8 space-y-6">
        <h2 class="text-2xl font-semibold text-gray-800">Send A Note</h2>

        <form wire:submit="save" class="space-y-6">
            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input
                    wire:model="title"
                    type="text"
                    placeholder="Title"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-500 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                >
                @error('title') <p class="text-sm text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Body -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Body</label>
                <input
                    wire:model="body"
                    type="text"
                    placeholder="Enter body"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-500 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                >
                @error('body') <p class="text-sm text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Recipient's email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Recipient's Email</label>
                <input
                    wire:model="recipientEmail"
                    type="text"
                    placeholder="example@email.com"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-500 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                >
                @error('recipientEmail') <p class="text-sm text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="sendNow">Send Now ? </label>
                <input type="checkbox" name="sendNow" wire:model="sendNow">
            </div>

            <!-- Date Picker -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                <input
                    type="date"
                    wire:model="date"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-500 text-gray-800 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                >
                @error('date') <p class="text-sm text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Time -->
            <div class="flex flex-col md:flex-row md:items-end gap-4">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                    <input
                        type="time"
                        wire:model="time"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-500 text-gray-800 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                    >
                    @error('time') <p class="text-sm text-rose-600 mt-1">{{ $message }}</p> @enderror
                </div>

            </div>

            <!-- Submit -->
            <div class="pt-4">
                <button
                    type="submit"
                    class="w-full py-3 px-6 bg-rose-600 hover:bg-rose-700 text-white font-medium rounded-xl shadow-md transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>


