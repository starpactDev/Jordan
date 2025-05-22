<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jordan | Residental Moving Service</title>
    @production
        @vite('resources/css/app.css')
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endproduction
</head>
<body>
    <section class="bg-teal-950 ">
        <div class="w-5/6 md:w-11/12 mx-auto flex justify-between items-center h-72 py-6 group">
            <h1 class="text-4xl md:text-5xl lg:text-7xl text-slate-100 traci flex-1/2">About</h1>
            <div class="flex flex-5/6 sm:flex-1/2 h-full items-center justify-center relative overflow-hidden ">

                <div class="absolute top-1/4 left-1/4 w-20 h-20 border-4 border-teal-300 rounded-full opacity-40 animate-pulse z-10"></div>
              
                <div class="absolute top-2/3 left-1/2 w-16 h-16 border-2 border-teal-400 rotate-45 group-hover:rotate-0 opacity-30 z-20 transition duration-500 ease-in-out"></div>
              
                <div class="absolute bottom-1/4 right-1/4 w-24 h-24 border-2 border-teal-200 rounded-md group-hover:rotate-45 opacity-20 z-0 transition duration-500 ease-in-out"></div>
              
                <div class="absolute top-0 right-0 w-12 h-12 bg-teal-700 opacity-10 rotate-12 z-0"></div>
              
                <div class="absolute w-[150%] h-px bg-teal-700 rotate-12 top-1/3 opacity-10 z-0"></div>
                <div class="absolute w-[150%] h-px bg-teal-700 rotate-12 top-1/2 opacity-10 z-0"></div>
                <div class="absolute w-[150%] h-px bg-teal-700 rotate-12 bottom-1/3 opacity-10 z-0"></div>
              
                <div class="absolute left-1/3 top-1/3 group-hover:top-2/5 group-hover:left-1/3 w-5 h-5 bg-teal-300 rounded-full opacity-30 hover:scale-125 hover:opacity-80 transition-all duration-500 ease-in-out z-30"></div>

                <div class="relative">
                  <div class="before:content-[''] before:absolute before:w-6 before:h-6 before:bg-teal-500 before:rounded-full before:opacity-10 before:top-[-20px] before:left-[-20px] after:content-[''] after:absolute after:w-10 after:h-10 after:border after:border-teal-600 after:rounded-full after:opacity-10 after:bottom-[-30px] after:right-[-30px]"></div>
                </div>
            </div>              
        </div>
    </section>
    <section class="bg-emerald-50 dark:bg-emerald-950 min-h-screen py-6 md:py-12 lg:py-24 transition-colors duration-300">
        <div class="grid grid-cols-1 lg:grid-cols-2">

        </div>
    </section>
</body>
</html>