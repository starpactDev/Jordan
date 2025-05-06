<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="color-scheme" content="light">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jordan | An Consumer Affairs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="hidden lg:block bg-white dark:bg-violet-950 dark:text-white sticky top-0  h-20 ">
        <div class="grid grid-cols-12 gap-4 items-center h-full container mx-auto">
            <div class="col-span-2">
                <a href="">
                    <img src="{{ asset('/images/logo/puva-black.png') }}" alt="">
                </a>
            </div>
            <div class="col-span-8">
                <nav class="flex justify-center items-center gap-4">
                    <a href="" class="text-gray-500 hover:text-gray-900">Home</a>
                    <a href="" class="text-gray-500 hover:text-gray-900">About</a>
                    <a href="" class="text-gray-500 hover:text-gray-900">Services</a>
                    <a href="" class="text-gray-500 hover:text-gray-900">Contact</a>
                </nav>
            </div>
            <div class="col-span-2">
                <a href="" class="bg-violet-950 dark:border hover:bg-violet-600 text-white font-semibold tracking-wide px-8 py-4 rounded-full transition-colors duration-700 ease-in-out">Submit Review </a>
            </div>
        </div>
    </header>
    <section class="min-h-[200vh] bg-amber-50" ></section>
</body>
</html>