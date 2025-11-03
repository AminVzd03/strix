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
            <div x-data="{selectedOption: @entangle('selectedOption')}">
                <label for="sendNow">Send Now </label>
                <input type="radio" id="sendNow" name="sendTime" x-model="selectedOption" value="sendNow" wire:model="sendNow">
                &nbsp;
                <label for="sendLater">Send Later </label>
                <input type="radio" id="sendLater" name="sendTime" x-model="selectedOption" value="sendLater" wire:model="sendLater">
                <div x-show="selectedOption == 'sendLater'">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input
                        type="date"
                        wire:model="date"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-gray-500 text-gray-800 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent"
                    >
                    @error('date') <p class="text-sm text-rose-600 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col md:flex-row md:items-end gap-4" x-show="selectedOption == 'sendLater'">
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
            </div>



            <!-- Time -->


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


