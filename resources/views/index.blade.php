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
    <header class="hidden lg:block bg-white dark:bg-purple-700 dark:text-white sticky top-0  h-20 ">
        <div class="grid grid-cols-12 gap-4 items-center h-full container mx-auto">
            <div class="col-span-2">
                <a href="">
                    <img src="{{ asset('/images/logo/puva-black.png') }}" alt="" class="dark:grayscale dark:invert">
                </a>
            </div>
            <div class="col-span-8">
                <nav class="flex justify-center items-center gap-4 text-slate-800  dark:text-white ">
                    <a href="" class="hover:text-slate-600 dark:hover:text-slate-400">Home</a>
                    <a href="" class="hover:text-slate-600 dark:hover:text-slate-400">About</a>
                    <a href="" class="hover:text-slate-600 dark:hover:text-slate-400">Services</a>
                    <a href="" class="hover:text-slate-600 dark:hover:text-slate-400">Contact</a>
                </nav>
            </div>
            <div class="col-span-2">
                <a href="" class="bg-purple-700 dark:border hover:bg-blue-700 text-white font-semibold tracking-wide px-8 py-4 rounded-full transition-colors duration-700 ease-in-out">Submit Review </a>
            </div>
        </div>
    </header>
    <section class="min-h-[200vh] bg-amber-50 dark:bg-amber-800 py-4">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center text-slate-900 dark:text-slate-50 tracking-wider">Services We Provided</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-12 px-6 lg:px-0 py-8 border gap-4 items-center container mx-auto my-16">
                <div class="hidden lg:block col-span-1"></div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <img src="{{ asset('images/logo/icons/solar-cell.png') }}" alt="" class="w-1/2 mx-auto my-4 dark:invert">
                         <h3 class="text-slate-950 dark:text-slate-50">Solar</h3>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <img src="{{ asset('images/logo/icons/car-alt.png') }}" alt="" class="w-1/2 mx-auto my-4 dark:invert">
                        <h3 class="text-slate-950 dark:text-slate-50">Car Rent</h3>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <img src="{{ asset('images/logo/icons/sack-dollar.png') }}" alt="" class="w-1/2 mx-auto my-4 dark:invert">
                        <h3 class="text-slate-950 dark:text-slate-50">Cash Loan</h3>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <img src="{{ asset('images/logo/icons/calendar-lines-pen.png') }}" alt="" class="w-1/2 mx-auto my-4 dark:invert">
                        <h3 class="text-slate-950 dark:text-slate-50">Take Note</h3>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <img src="{{ asset('images/logo/icons/rocket-lunch.png') }}" alt="" class="w-1/2 mx-auto my-4 dark:invert">
                        <h3 class="text-slate-950 dark:text-slate-50">Rocket Lunch</h3>
                    </div>
                </div>
                <div class="hidden lg:block col-span-1"></div>
            </div>
        </div>
        
    </section>
</body>
</html>