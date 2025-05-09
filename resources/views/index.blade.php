<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jordan | An Consumer Affairs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="hidden lg:block bg-white dark:bg-purple-700 dark:text-white sticky top-0  h-20 z-9">
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

        <div class="container lg:w-5/6 mx-auto my-6 lg:my-12 py-4 md:py-6 lg:py-12 px-4 lg:px-0">
            <h3 class="uppercase tracking-widest font-semibold text-slate-900 dark:text-slate-100">What We Provide</h3>
            <h2 class=" text--2xl md:text-3xl lg:text-4xl font-medium tracking-wide lg:w-1/2 font-serif my-4 text-gray-800 dark:text-gray-200">Hand-picked recommendations to save you time</h2>
            <div class="grid sm:gird-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 my-6 lg:my-12">
                <div class="col-span-4 min-h-20 border-l-4 border-blue-800 dark:border-blue-300 px-4 py-2 flex gap-2 justify-between group hover:bg-purple-600 transition-all duration-300 ease-in-out">
                    <div class="w-1/4 min-w-16">
                        <img src="{{ asset('images/logo/icons/story-book.svg') }}" alt="" class="w-max-16 p-2 dark:invert group-hover:invert transition-all duration-300 ease-in-out ">
                    </div>
                    <div class="pl-2">
                        <h4 class="text-2xl font-meidum tracking-wide text-neutral-900 dark:text-neutral-100 group-hover:text-neutral-100 transition-all duration-300 ease-in-out">Lorem ipsum dolor sit.</h4>
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-gray-200 transition-all duration-300 ease-in-out">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-span-4 min-h-20 border-l-4 border-blue-800 dark:border-blue-300 px-4 py-2 flex gap-2 justify-between group hover:bg-purple-600 transition-all duration-300 ease-in-out">
                    <div class="w-1/4 min-w-16">
                        <img src="{{ asset('images/logo/icons/story-book.svg') }}" alt="" class="w-max-16 p-2 dark:invert group-hover:invert transition-all duration-300 ease-in-out ">
                    </div>
                    <div class="pl-2">
                        <h4 class="text-2xl font-meidum tracking-wide text-neutral-900 dark:text-neutral-100 group-hover:text-neutral-100 transition-all duration-300 ease-in-out">Lorem ipsum dolor sit.</h4>
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-gray-200 transition-all duration-300 ease-in-out">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-span-4 min-h-20 border-l-4 border-blue-800 dark:border-blue-300 px-4 py-2 flex gap-2 justify-between group hover:bg-purple-600 transition-all duration-300 ease-in-out">
                    <div class="w-1/4 min-w-16">
                        <img src="{{ asset('images/logo/icons/story-book.svg') }}" alt="" class="w-max-16 p-2 dark:invert group-hover:invert transition-all duration-300 ease-in-out ">
                    </div>
                    <div class="pl-2">
                        <h4 class="text-2xl font-meidum tracking-wide text-neutral-900 dark:text-neutral-100 group-hover:text-neutral-100 transition-all duration-300 ease-in-out">Lorem ipsum dolor sit.</h4>
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-gray-200 transition-all duration-300 ease-in-out">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-center text-slate-900 dark:text-slate-50 tracking-wider mt-20 mb-4">Trusted Comapnies</h2>
            <div class="grid grid-cols-4 md:grod-cols-8 lg:grid-cols-12 gap-6 px-4">
                <div class="col-span-4 group">
                    <div class="text-center text-neutral-900 dark:text-slate-50 space-y-2 p-4 relative -translate-x-3 rotate-6 duration-500 group-hover:rotate-0">
                        <div class="absolute top-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute top-0 left-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="p-4">
                            <img src="{{ asset('images/logo/icons/rocket-lunch.png') }}" alt="" class="mx-auto dark:invert">
                            <h3 class="text-xl ">This is a head of the trusted company.</h3>
                            <a href="" class="text-blue-900">www.dugood.org</a>
                        </div>
                        <div class="absolute top-0 right-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute bottom-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                    </div>
                </div>
                <div class="col-span-4 group">
                    <div class="text-center text-neutral-900 dark:text-slate-50 space-y-2 p-4 relative -translate-x-3 rotate-6 duration-500 group-hover:rotate-0">
                        <div class="absolute top-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute top-0 left-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="p-4">
                            <img src="{{ asset('images/logo/icons/rocket-lunch.png') }}" alt="" class="mx-auto dark:invert">
                            <h3 class="text-xl ">This is a head of the trusted company.</h3>
                            <a href="" class="text-blue-900">www.dugood.org</a>
                        </div>
                        <div class="absolute top-0 right-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute bottom-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                    </div>
                </div>
                <div class="col-span-4 group">
                    <div class="text-center text-neutral-900 dark:text-slate-50 space-y-2 p-4 relative -translate-x-3 rotate-6 duration-500 group-hover:rotate-0">
                        <div class="absolute top-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute top-0 left-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="p-4">
                            <img src="{{ asset('images/logo/icons/rocket-lunch.png') }}" alt="" class="mx-auto dark:invert">
                            <h3 class="text-xl ">This is a head of the trusted company.</h3>
                            <a href="" class="text-blue-900">www.dugood.org</a>
                        </div>
                        <div class="absolute top-0 right-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute bottom-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <footer class="min-h-[75dvh] bg-blue-800 ">
        <div class="container mx-auto grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 py-4 border-b border-white p-4">
            <div class="col-span-4">
                <a href="">
                    <img src="{{ asset('images/logo/puva-black.png') }}" alt="" class="dark:grayscale dark:invert w-24">
                </a>
                <div class="flex justify-start items-center gap-4 text-slate-800 dark:text-white font-medium my-4">
                    <a href="">
                        <img src="{{ asset('images/logo/icons/facebook.svg') }}" alt="facebook" class="w-6 h-6 dark:invert hover:opacity-75">
                    </a>
                    <a href="">
                        <img src="{{ asset('images/logo/icons/twitter-alt.svg') }}" alt="twitter" class="w-6 h-6 dark:invert hover:opacity-75">
                    </a>
                    <a href="">
                        <img src="{{ asset('images/logo/icons/instagram.svg') }}" alt="instagram" class="w-6 h-6 dark:invert hover:opacity-75">
                    </a>
                    <a href="">
                        <img src="{{ asset('images/logo/icons/tik-tok.svg') }}" alt="tiktok" class="w-6 h-6 dark:invert hover:opacity-75">
                    </a>
                    <a href="">
                        <img src="{{ asset('images/logo/icons/linkedin.svg') }}" alt="linkedin" class="w-6 h-6 dark:invert hover:opacity-75">
                    </a>
                </div>
            </div>
            <div class="col-span-4 flex flex-col gap-2">
                <a href="" class="font-semibold text-neutral-50 hover:text-neutral-300">About Us</a>
                <a href="" class="font-semibold text-neutral-50 hover:text-neutral-300">Terms of Use</a>
                <a href="" class="font-semibold text-neutral-50 hover:text-neutral-300">Privacy Policy</a>
            </div>
            <div class="col-span-4">

            </div>
        </div>
        <div class="container mx-auto my-8 space-y-4 text-neutral-200 px-4 lg:px-0">
            <h2 class="text-2xl font-semibold tracking-wider">Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facilis, dolor cum sequi quisquam reprehenderit! Pariatur accusantium deserunt unde fugit cum velit fugiat tempore eveniet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolore rerum similique adipisci minus fugiat molestiae. Repellat aut quo vero, excepturi est itaque? Nobis, quam.</p>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit animi maxime rerum soluta aliquam doloremque, dolorem odio non error totam, eos quo voluptatem accusantium provident placeat necessitatibus assumenda vero similique dignissimos. Harum quos debitis odio illo assumenda perspiciatis nesciunt suscipit optio deleniti rem laudantium, repudiandae at accusamus sunt rerum labore?</small>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus ipsum voluptatem rerum officia animi mollitia, saepe reprehenderit nesciunt magnam totam. Nam est totam harum possimus suscipit, quia ea odio corporis, unde minus explicabo provident. Ab, deleniti cum labore explicabo alias expedita recusandae dolore earum minima, quae distinctio esse vero nisi. </p>
        </div>
        <div class="border-t border-neutral-500 text-center text-neutral-200 py-4">© Designed and Developed by Starpact Global Services</div>
    </footer>
    
</body>
</html>