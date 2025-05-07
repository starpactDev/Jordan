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
            <div class=" cols-span-1 lg:col-span-2">
                <a href="">
                    <img src="{{ asset('images/logo/puva-black.png') }}" alt="" class="dark:grayscale dark:invert">
                </a>
            </div>
            <div class="col-span-10 lg:col-span-8">
                <nav class="flex justify-center items-center gap-4 text-slate-800 dark:text-white font-medium">
                    <!-- Home -->
                    <a href="/" class="hover:text-blue-600 dark:hover:text-blue-400 transition">Home</a>
                  
                    <!-- Moving Services -->
                    <div class="relative group">
                      <button class="hover:text-blue-600 dark:hover:text-blue-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition py-4">Moving Services</button>
                      <div class="absolute left-0 border-t-4 border-t-blue-600 w-64 bg-white dark:bg-slate-800 shadow-lg rounded-md hidden group-hover:block z-20">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Residential & Commercial Moving</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Container & Freight Moving</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Car Hauling</a>
                      </div>
                    </div>
                  
                    <!-- Home Services -->
                    <div class="relative group">
                      <button class="hover:text-blue-600 dark:hover:text-blue-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition py-4">Home Services</button>
                      <div class="absolute left-0 border-t-4 border-t-blue-600 w-64 bg-white dark:bg-slate-800 shadow-lg rounded-md hidden group-hover:block z-20 ">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Roofing</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Flooring</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">HVAC</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Plumbing</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Solar Systems</a>
                      </div>
                    </div>
                  
                    <!-- Limousine Service -->
                    <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition py-4">Limousine Service</a>
                  
                    <!-- Electricity Companies -->
                    <div class="relative group">
                      <button class="hover:text-blue-600 dark:hover:text-blue-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition py-4">Electricity Companies</button>
                      <div class="absolute left-0 border-t-4 border-t-blue-600 w-64 bg-white dark:bg-slate-800 shadow-lg rounded-md hidden group-hover:block z-20">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Get Estimate</a>
                      </div>
                    </div>
                  
                    <!-- Real Estate -->
                    <div class="relative group">
                      <button class="hover:text-blue-600 dark:hover:text-blue-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition py-4">Real Estate</button>
                      <div class="absolute left-0 border-t-4 border-t-blue-600 w-64 bg-white dark:bg-slate-800 shadow-lg rounded-md hidden group-hover:block z-20">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Buy</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Sell</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 transition">Rent</a>
                      </div>
                    </div>
                </nav>
                  
            </div>
            <div class="col-span-1 lg:col-span-2">
                <a href="" class="bg-purple-700 dark:border hover:bg-blue-700 text-white font-semibold tracking-wide block text-center w-full py-4 rounded-full transition-colors duration-700 ease-in-out">Submit Review </a>
            </div>
        </div>
    </header>
    <section class="min-h-[200vh] bg-amber-50 dark:bg-amber-800 py-4">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-center text-slate-900 dark:text-slate-50 tracking-wider mt-20 mb-4">Services We Provided</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-12 px-6 lg:px-0 py-4 shadow-sm gap-4 items-center container mx-auto">
                <div class="hidden lg:block col-span-1"></div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/shipping-fast.svg') }}" alt="Moving Service" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Moving Service</h3>
                        </div>                        
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/hammer-crash.svg') }}" alt="Home Service" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Home Service</h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/car-alt.png') }}" alt="Limousine Service" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Limousine Service</h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/plug-alt.svg') }}" alt="Electricity Company" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Electricity Company</h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rounded-full border-2 border-white shadow-sm hover:shadow-lg bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/blueprint-house.svg') }}" alt="Real Estate" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Real Estate</h3>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block col-span-1"></div>
            </div>
        </div>
        
    </section>
</body>
</html>