<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="32x32" href="{{asset('/assets/logos/logo2.png')}}">
    <title>Strix | Welcome</title>
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


        body {
            background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=870');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }


        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }
    </style>
</head>
<body class="h-screen w-screen flex flex-col justify-between items-center text-white font-sans overflow-hidden">
<div class="mt-10 ml-10">
    <h2 class="text-4xl md:text-6xl font-bold tracking-wide madrigal-font text-shade text-amber-200">
        Share notes with everyone !
    </h2>
</div>
<div class="mb-80">
    <a href="{{route('login')}}" class="px-10 py-4 text-lg md:text-xl font-semibold bg-rose-500 text-black rounded-full shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
        Get Started
    </a>
</div>

<x-badge positive label="Positive" />
</body>
</html>
