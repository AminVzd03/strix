<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="
    w-[80%]                /* 80% width */
    mx-auto                /* Center horizontally */
    bg-rose-500            /* Rose background */
    hover:bg-rose-600      /* Darker rose on hover */
    text-white             /* White text */
    font-medium            /* Medium font weight */
    py-3                   /* Vertical padding */
    px-6                   /* Horizontal padding */
    rounded-lg             /* Rounded edges */
    shadow-md              /* Subtle shadow */
    transition             /* Smooth hover transition */
    duration-200           /* Transition speed */
    flex                   /* Flexbox for centering */
    justify-center         /* Center content horizontally */
    items-center           /* Center content vertically */
" href="{{route('note.add')}}">
                Add Notes
            </a>
        </div>
    </div>
</x-app-layout>
