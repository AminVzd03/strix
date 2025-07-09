<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
                </div>
                <x-card title="Lorem Ipsum is simply!">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt dui eget scelerisque dapibus.
                    Quisque mattis dignissim cursus. Pellentesque sed arcu ac augue bibendum gravida.
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>
