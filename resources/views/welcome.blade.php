<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="32x32" href="{{asset('/assets/logos/logo2.png')}}">
    <title>Strix | Welcome</title>
    <x-monoicon-delete class="text-white" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .vibrant-bg {
            background: linear-gradient(270deg, #ff0055, #ff66cc, #000000);
            background-size: 600% 600%;
            animation: gradientShift 12s ease infinite;
        }
    </style>
</head>
<body class="h-screen w-screen vibrant-bg flex flex-col justify-between items-center text-white font-sans overflow-hidden">

<!-- Title -->
<div class="mt-24 text-center">
    <h1 class="text-4xl md:text-6xl font-bold tracking-wide drop-shadow-lg">
        Share notes with everyone !
    </h1>
</div>

<!-- Button -->
<div class="mb-80">
    <a href="{{route('login')}}" class="px-10 py-4 text-lg md:text-xl font-semibold bg-rose-500 text-black rounded-full shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
        Get Started
    </a>
</div>

<x-badge positive label="Positive" />
</body>
</html>
