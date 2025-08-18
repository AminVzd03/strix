<?php

use Livewire\Volt\Component;

new class extends Component {
    public $id;
    public function deleteNote(): void
    {
        \App\Models\Note::destroy($this->id);
        info($this->id);

    }

}; ?>
<div x-data="{open : false}">
    <a @click="open = true">
{{--        <x-monoicon-delete @click="open = true" class="text-white-300 flex justify-center w-5"/>--}}
        just click this
    </a>
    <div
        x-show="open"
        x-transition
        class="fixed inset-0 flex items-center justify-center bg-black/60 z-50"
    >
        <div class="bg-white rounded-2xl shadow-2xl w-1/5 p-6 text-violet-950" x-transition.scale.opacity.duration-300>
            <!-- Title -->
            <h3 class="text-lg font-semibold mb-4 text-center">
                Are you sure about deleting this note?
            </h3>

            <!-- Actions -->
            <div class="flex justify-center space-x-4">
                <!-- Cancel Button -->
                <button
                    @click="open = false"
                    class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition"
                >
                    Cancel
                </button>

                <!-- Delete Button -->
                <button
                    wire:click="deleteNote"
                    @click="open = false"
                    class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700 transition shadow"
                >
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
