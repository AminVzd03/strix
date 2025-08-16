<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $note->title }}</title>
</head>
<body class="bg-gray-100 font-sans">
<div class="max-w-xl mx-auto bg-white rounded-xl shadow-md p-6">

    {{-- Title --}}
    <h1 class="text-2xl font-bold text-gray-800 mb-4">
        {{ $note->title }}
    </h1>

    {{-- Info line --}}
    <p class="text-sm text-gray-500 mb-6">
        This message is from <span class="font-semibold">Strix App</span>
        sent by <span class="text-gray-800">{{ $user->name }}</span>
    </p>

    {{-- Body --}}
    <div class="text-gray-700 leading-relaxed mb-8">
        {!! nl2br(e($note->body)) !!}
    </div>

    {{-- Button --}}
    <div class="text-center">
        <a href="{{ config('app.url') }}"
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-6 py-3 rounded-lg shadow transition">
            Back to Strix App
        </a>
    </div>
</div>
</body>
</html>
