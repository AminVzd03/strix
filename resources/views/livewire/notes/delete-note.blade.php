<div class="w-full max-w-sm mx-auto p-4 rounded-xl shadow-md bg-white border border-gray-200 text-center space-y-4">
    <p class="text-gray-700 font-medium">Do you really want to delete "{{$noteTitle}} "?</p>

    <div class="flex justify-between gap-3">
        <button class="flex-1 px-3 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium transition">
            Cancel
        </button>
        <button wire:click="deleteNote"
                class="flex-1 px-3 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white font-semibold transition">
            Delete
        </button>
    </div>
</div>
