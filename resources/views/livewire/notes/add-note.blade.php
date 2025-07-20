<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title ;
    public string $body ;
    public $sendDate;
    public function submit()
    {
        info($this->sendDate);
        auth()
            ->user()
            ->notes()
            ->create([
                'title' => $this->title,
                'body' => $this->body,
                'send_date' => $this->sendDate
            ]);
        redirect(route('dashboard'));

    }
}; ?>

<div>
    <form class="p-6 space-y-6" wire:submit="submit">
        <!-- Text Input 1 -->
        <div class="space-y-2">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <div class="relative">
                <input
                    wire:model="title"
                    type="text"
                    name="title"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-rose-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 bg-gray-50"
                    placeholder="Your messages's title"
                >
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="h-5 w-5 text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Text Input 2 -->
        <div class="space-y-2">
            <label for="body" class="block text-sm font-medium text-gray-700">Message</label>
            <div class="relative">
                <input
                    wire:model="body"
                    type="text"
                    name="body"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-rose-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 bg-gray-50"
                    placeholder="Your message"
                >
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="h-5 w-5 text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Date Picker -->
        <div class="space-y-2">
            <label for="sendDate" class="block text-sm font-medium text-gray-700">Send Date</label>
            <div class="relative">
                <input
                    wire:model="sendDate"
                    type="date"
                    id="birthdate"
                    name="sendDate"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-rose-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 bg-gray-50 appearance-none"
                >
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="h-5 w-5 text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
            <button

                type="submit"
                class="w-full bg-gradient-to-r from-rose-500 to-rose-400 hover:from-rose-600 hover:to-rose-500 text-white font-bold py-3 px-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-opacity-50"
            >
                Submit
                <span class="ml-2">→</span>
            </button>
        </div>
    </form>

</div>
