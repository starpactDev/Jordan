<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jordan | An Consumer Affairs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .rainbow-border {
      position: relative;
      z-index: 0;
    }
  
    .rainbow-border::before {
      content: '';
      position: absolute;
      inset: 0;
      padding: 6px; /* Thin border width */
      border-radius: 9999px;
      background: linear-gradient(90deg, #ff0080, #ff8c00, #40e0d0, #8a2be2, #ff0080);
      background-size: 300% 300%;
      animation: rainbowMove 6s linear infinite;
      mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
      mask-composite: exclude;
      -webkit-mask:
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      pointer-events: none;
      z-index: -1;
    }
  
    @keyframes rainbowMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>
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

    {{-- Service We Provide --}}
    <section class="min-h-screen bg-gradient-to-br from-purple-600 to-fuchsia-500 dark:bg-purple-800 bg-blend-overlay bg-center bg-cover py-4" style="background-image: url({{ asset('images/homepage/hero_banner.png') }})">
        <div class="lg:mt-48 w-11/12 mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold text-center text-slate-50 dark:text-slate-50 tracking-wider mt-20 mb-4 lg:mb-16">Live Better. Move smarter. Powered by Us.</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-12 px-6 lg:px-0 py-4 shadow-sm gap-4 items-center container mx-auto">
                <div class="hidden lg:block col-span-1"></div>
                <div class="col-span-2">
                    <div class="rainbow-border rounded-full bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4 transition duration-300 hover:scale-105 shadow-md">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/shipping-fast.svg') }}" alt="Moving Service" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Moving Service</h3>
                        </div>                        
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rainbow-border rounded-full bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4 hover:scale-105">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/hammer-crash.svg') }}" alt="Home Service" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Home Service</h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rainbow-border rounded-full bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4 hover:scale-105">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/car-alt.png') }}" alt="Limousine Service" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Limousine Service</h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rainbow-border rounded-full bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4 hover:scale-105">
                        <div class="flex justify-center items-center flex-col h-full">
                            <img src="{{ asset('images/logo/icons/plug-alt.svg') }}" alt="Electricity Company" class="w-1/3 mx-auto my-4 dark:invert">
                            <h3 class="text-slate-950 dark:text-slate-50">Electricity Company</h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="rainbow-border rounded-full bg-yellow-50 dark:bg-yellow-800 aspect-square text-center py-4 hover:scale-105">
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
    <div class="min-h-52 bg-repeat-x bg-amber-50" style="background-image: url({{ asset('images/homepage/paint_dripping.png') }})"> </div>    

    {{-- What We Provide --}}
    <section class="bg-amber-50 dark:bg-amber-800 py-4">
        <div class="w-11/12 lg:w-5/6 mx-auto my-6 lg:my-12 py-4 md:py-6 lg:py-12 px-4 lg:px-0 border-b border-slate-300 dark:border-slate-700">
            <h3 class="uppercase tracking-widest font-semibold text-amber-950 dark:text-slate-100">What We Provide</h3>
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
    </section>

    {{-- Trusted Companies --}}
    <section class="bg-linear-to-r from-amber-50 to-white dark:bg-amber-800 py-4">
        <div class="w-11/12 mx-auto ">
            <h2 class="text-3xl font-semibold text-center text-amber-950 dark:text-slate-50 tracking-wider mb-16">TRUSTED COMPANIES</h2>
            <div class="grid grid-cols-4 md:grod-cols-8 lg:grid-cols-12 gap-6 px-4 pb-12">
                <div class="col-span-4 group">
                    <div class="text-center text-neutral-900 dark:text-slate-50 space-y-2 p-4 relative -translate-x-3 rotate-6 duration-500 group-hover:rotate-0">
                        <div class="absolute top-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute top-0 left-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="p-4 h-64 flex flex-col justify-center ">
                            <div class="w-36 mx-auto relative mb-4">
                                <img src="{{ asset('images/company/company_1.png') }}" alt="" class="mx-auto dark:invert h-36 object-contain">
                            </div>
                            <h3 class="text-xl ">MAJORITY</h3>
                            <a href="" class="text-blue-900">www.dugood.org</a>
                        </div>
                        <div class="absolute top-0 right-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute bottom-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                    </div>
                </div>
                <div class="col-span-4 group ">
                    <div class="text-center text-neutral-900 dark:text-slate-50 space-y-2 p-4 relative -translate-x-3 rotate-6 duration-500 group-hover:rotate-0">
                        <div class="absolute top-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute top-0 left-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="p-4 h-64 flex flex-col justify-center">
                            <div class="w-36 mx-auto relative mb-4">
                                <img src="{{ asset('images/company/company_2.png') }}" alt="" class="mx-auto dark:invert h-36 object-contain">
                            </div>
                            <h3 class="text-xl ">Superior Funding</h3>
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
                        <div class="p-4 h-64 flex flex-col justify-center">
                            <div class="w-36 mx-auto relative mb-4">
                                <img src="{{ asset('images/company/company_3.png') }}" alt="" class="mx-auto dark:invert h-36 object-contain">
                            </div>
                            <h3 class="text-xl ">BankFive</h3>
                            <a href="" class="text-blue-900">www.dugood.org</a>
                        </div>
                        <div class="absolute top-0 right-4 h-full w-px bg-[linear-gradient(to_bottom,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                        <div class="absolute bottom-4 left-0 h-px w-full bg-[linear-gradient(to_right,_transparent_0%,_var(--gradient-bg)_9.27%,_var(--gradient-bg)_90.7%,_transparent_100%)] [--gradient-bg:var(--color-black)]/15 dark:[--gradient-bg:var(--color-white)]/10"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-5/6 mx-auto border-b border-slate-300"></div>
    </section>

    {{-- Home Service --}}
    <section class="bg-linear-to-r from-amber-50 to-white-50 dark:bg-amber-800 py-4" >
        <div class="w-11/12 lg:w-5/6 mx-auto my-6 md:my-12 px-4 lg:px-0 py-4">
            <h3 class="uppercase tracking-widest font-semibold text-amber-900 dark:text-slate-100">Home Service</h3>
            <h6 class=" text-xl md:text-2xl lg:text-3xl font-medium tracking-wide lg:w-1/2 font-serif my-4 text-gray-800 dark:text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, veritatis!</h6>
            <div class="grid grid-cols-12 gap-4" id="interactive-sections">
                <div class="col-span-12 md:col-span-3  flex items-center" id="menu">
                    <ul class="space-y-6 w-full">
                        <li class="w-full px-6 hover-item roofing-item py-2 font-semibold bg-amber-300 hover:bg-amber-400 transition" data-target="roofing">
                            <a href="#">Roofing</a>
                        </li>
                        <li class="w-full px-6 hover-item flooring-item py-2 font-semibold bg-amber-300 hover:bg-amber-400 transition" data-target="flooring">
                            <a href="#">Flooring</a>
                        </li>
                        <li class="w-full px-6 hover-item hvac-item py-2 font-semibold bg-amber-300 hover:bg-amber-400 transition" data-target="hvac">
                            <a href="#">HVAC</a>
                        </li>
                        <li class="w-full px-6 hover-item plumbing-item py-2 font-semibold bg-amber-300 hover:bg-amber-400 transition" data-target="plumbing">
                            <a href="#">Plumbing</a>
                        </li>
                        <li class="w-full px-6 hover-item solar-item py-2 font-semibold bg-amber-300 hover:bg-amber-400 transition" data-target="solar">
                            <a href="#">Solar System</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-span-12 md:col-span-9 relative min-h-96" id="content-area">
                    <div class="h-full section roofing-section  p-4" style="display: block;">
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4  h-full">
                            <p class="w-full md:w-1/3 text-justify text-neutral-950 dark:text-neutral-50">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime provident nobis unde quas, minima aliquam reprehenderit culpa optio? Quidem officia expedita cupiditate nihil atque? Molestias laboriosam laborum ipsa alias dolor harum eos aliquid cupiditate, officia libero! Molestias, tenetur laborum fugit nemo dolore et iure sunt obcaecati! Suscipit, illum omnis.
                            </p>
                            <div class="w-full md:w-2/3">
                              <img src="{{ asset('images/homepage/roofing.png') }}" alt="Roofing"class="w-full h-full max-h-84 object-contain " >
                            </div>
                        </div>
                    </div>
                    <div class="h-full section flooring-section  p-4 hidden ">
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4  h-full">
                            <p class="w-full md:w-1/3 text-justify text-neutral-950 dark:text-neutral-50">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime provident nobis unde quas, minima aliquam reprehenderit culpa optio? Quidem officia expedita cupiditate nihil atque? Molestias laboriosam laborum ipsa alias dolor harum eos aliquid cupiditate, officia libero! Molestias, tenetur laborum fugit nemo dolore et iure sunt obcaecati! Suscipit, illum omnis.
                            </p>
                            <div class="w-full md:w-2/3">
                              <img src="{{ asset('images/homepage/flooring.png') }}" alt="Roofing"class="w-full h-full max-h-84 object-contain " >
                            </div>
                        </div>
                    </div>
                    <div class="h-full section hvac-section  p-4 hidden ">
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4  h-full">
                            <p class="w-full md:w-1/3 text-justify text-neutral-950 dark:text-neutral-50">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime provident nobis unde quas, minima aliquam reprehenderit culpa optio? Quidem officia expedita cupiditate nihil atque? Molestias laboriosam laborum ipsa alias dolor harum eos aliquid cupiditate, officia libero! Molestias, tenetur laborum fugit nemo dolore et iure sunt obcaecati! Suscipit, illum omnis.
                            </p>
                            <div class="w-full md:w-2/3">
                              <img src="{{ asset('images/homepage/hvac.png') }}" alt="Roofing"class="w-full h-full max-h-84 object-contain " >
                            </div>
                        </div>
                    </div>
                    <div class="h-full section plumbing-section  p-4 hidden ">
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4  h-full">
                            <p class="w-full md:w-1/3 text-justify text-neutral-950 dark:text-neutral-50">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime provident nobis unde quas, minima aliquam reprehenderit culpa optio? Quidem officia expedita cupiditate nihil atque? Molestias laboriosam laborum ipsa alias dolor harum eos aliquid cupiditate, officia libero! Molestias, tenetur laborum fugit nemo dolore et iure sunt obcaecati! Suscipit, illum omnis.
                            </p>
                            <div class="w-full md:w-2/3">
                              <img src="{{ asset('images/homepage/plumbing.png') }}" alt="Roofing"class="w-full h-full max-h-84 object-contain " >
                            </div>
                        </div>
                    </div>
                    <div class="h-full section solar-section  p-4 hidden ">
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4  h-full">
                            <p class="w-full md:w-1/3 text-justify text-neutral-950 dark:text-neutral-50">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime provident nobis unde quas, minima aliquam reprehenderit culpa optio? Quidem officia expedita cupiditate nihil atque? Molestias laboriosam laborum ipsa alias dolor harum eos aliquid cupiditate, officia libero! Molestias, tenetur laborum fugit nemo dolore et iure sunt obcaecati! Suscipit, illum omnis.
                            </p>
                            <div class="w-full md:w-2/3">
                              <img src="{{ asset('images/homepage/solar.png') }}" alt="Roofing"class="w-full h-full max-h-84 object-contain " >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
    </section>

    {{-- We're Jordan --}}
    <section class="bg-linear-to-r from-pink-50 to-white-50 dark:bg-amber-800 py-4">
        <div class="w-11/12 lg:w-5/6 mx-auto my-6 md:my-12 px-4 lg:px-0 py-4 bg-purple-300 dark:bg-slate-700 min-h-64 rounded-4xl">
            <div class="grid grid-cols-12 gap-6 lg:px-8 py-16">
                <div class="col-span-12 md:col-span-6 space-y-6">
                    <h2 class="text-3xl font-bold text-purple-950 dark:text-amber-50 tracking-wider">We're Jordan</h2>
                    <p class="text-slate-800 dark:text-slate-200 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam facilis, dolor cum sequi quisquam reprehenderit! Pariatur accusantium deserunt unde fugit cum velit fugiat tempore eveniet.</p>
                    <button class="font-medium px-6 py-3 rounded-full bg-purple-900 hover:bg-purple-800 text-slate-50 hover:text-slate-100 dark:bg-amber-600 dark:text-slate-200 dark:hover:bg-amber-800 dark:hover:text-slate-100 transition duration-300 ease-in-out">What we do</button>
                </div>
                <div class="col-span-12 md:col-span-6 bg-purple-700 dark:bg-slate-400 rounded-2xl p-6 space-y-6 md:flex">
                    <div class="w-full md:w-2/3 space-y-4 text-slate-50 dark:text-slate-950">
                        <h4 class="text-xl font-semibold capitalized ">Lorem ipsum dolor sit amet</h4>
                        <p class="text-base/4 font-semibold tracking-wide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cupiditate placeat id quisquam hic consectetur.</p>
                        <button class="px-6 py-3 border-2 border-slate-50 hover:border:slate-200 rounded-full hover:bg-purple-600 font-medium transition duration-300 ease-in-out">Take a Look</button>
                    </div>
                    <div class="w-full md:w-1/3 flex justify-center items-center flex-wrap gap-x-3 md:py-6 ">
                        <div class="w-12 aspect-square border border-amber-900 flex justify-center items-center " style="background: linear-gradient(0deg,rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 48%, rgba(123, 51, 6, 1) 52%, rgba(123, 51, 6, 1) 52%, rgba(0, 251, 255, 1) 50%, rgba(0, 251, 255, 1) 100%);">
                            <span class="text-2xl font-bold text-neutral-950 ">2</span>
                        </div>
                        <div class="w-12 aspect-square border border-amber-900 flex justify-center items-center " style="background: linear-gradient(180deg,rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 48%, rgba(123, 51, 6, 1) 52%, rgba(123, 51, 6, 1) 52%, rgba(76, 185, 68, 1) 50%, rgba(76, 185, 68, 1) 100%);">
                            <span class="text-2xl font-bold text-neutral-950 ">0</span>
                        </div>
                        <div class="w-12 aspect-square border border-amber-900 flex justify-center items-center " style="background: linear-gradient(0deg,rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 48%, rgba(123, 51, 6, 1) 52%, rgba(123, 51, 6, 1) 52%, rgba(245, 238, 158, 1) 50%, rgba(245, 238, 158, 1) 100%);">
                            <span class="text-2xl font-bold text-neutral-950 ">2</span>
                        </div>
                        <div class="w-12 aspect-square border border-amber-900 flex justify-center items-center " style="background: linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 48%, rgba(123, 51, 6, 1) 52%, rgba(123, 51, 6, 1) 52%, rgba(240, 101, 67, 1) 50%, rgba(240, 101, 67, 1) 100%);">
                            <span class="text-2xl font-bold text-neutral-950 ">5</span>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

    </section>

    {{-- Moving Service --}}
    <section class="bg-linear-to-r from-amber-50 to-white-500  dark:bg-amber-800 py-4">
        <div class="w-11/12 lg:w-5/6 mx-auto my-6 md:my-12 px-4 lg:px-0 py-4 relative">
            <h3 class="uppercase tracking-widest font-semibold text-amber-950 dark:text-slate-100">Moving Service</h3>
            <h6 class=" text-xl md:text-2xl lg:text-3xl font-medium tracking-wide lg:w-1/2 font-serif my-4 text-gray-800 dark:text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, veritatis!</h6>
            <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 my-6 md:my-8 relative z-1">
                <div class="col-span-4 rounded shadow-sm hover:-translate-y-2 transition-all duration-300 ease-in-out">
                    <div class="aspect-[1.67] bg-white">
                        <img src="{{ asset('images/homepage/1.png') }}" alt="" class="w-full object-cover">
                    </div>
                    <div class="h-2 " style="background: linear-gradient(90deg, #6b21a8 0%, #6b21a8 50%, #1d4ed8 50%, #1d4ed8 100%);"></div>
                    <div class="p-6 space-y-4 h-48 overflow-hidden bg-amber-50 dark:bg-neutral-950">
                        <h3 class="text-lg font-semibold tracking-wider text-slate-600 dark:text-slate-400">Residental & Commercial Moving</h3>
                        <p class="text-neutral-950 dark:text-neutral-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime doloribus culpa, aut repellat dolor praesentium odio repellendus est id corporis.</p>
                    </div>
                </div>
                <div class="col-span-4 rounded shadow-sm hover:-translate-y-2 transition-all duration-300 ease-in-out">
                    <div class="aspect-[1.67] bg-white">
                        <img src="{{ asset('images/homepage/2.png') }}" alt="" class="w-full object-cover">
                    </div>
                    <div class="h-2 " style="background: linear-gradient(90deg, #6b21a8 0%, #6b21a8 50%, #1d4ed8 50%, #1d4ed8 100%);"></div>
                    <div class="p-6 space-y-4 h-48 overflow-hidden bg-amber-50 dark:bg-neutral-950">
                        <h3 class="text-lg font-semibold tracking-wider text-slate-600 dark:text-slate-400">Container & Freight Moving</h3>
                        <p class="text-neutral-950 dark:text-neutral-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime doloribus culpa, aut repellat dolor praesentium odio repellendus est id corporis.</p>
                    </div>

                </div>
                <div class="col-span-4 rounded shadow-sm hover:-translate-y-2 transition-all duration-300 ease-in-out">
                    <div class="aspect-[1.67] bg-white">
                        <img src="{{ asset('images/homepage/3.png') }}" alt="" class="w-full object-cover">
                    </div>
                    <div class="h-2 " style="background: linear-gradient(90deg, #6b21a8 0%, #6b21a8 50%, #1d4ed8 50%, #1d4ed8 100%);"></div>
                    <div class="p-6 space-y-4 h-48 overflow-hidden bg-amber-50 dark:bg-neutral-950">
                        <h3 class="text-lg font-semibold tracking-wider text-slate-600 dark:text-slate-400">Car Hauling</h3>
                        <p class="text-neutral-950 dark:text-neutral-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime doloribus culpa, aut repellat dolor praesentium odio repellendus est id corporis.</p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/homepage/parcel_1.png') }}" alt="" class="absolute top-8 rotate-12 right-4 w-32 ">
            <img src="{{ asset('images/homepage/parcel_2.png') }}" alt="" class="absolute -bottom-12 -rotate-12 left-4 w-32 z-1">
        </div>
    </section>

    {{-- Newsletter --}}
    <section class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <!-- Left Half -->
        <div class="col-span-1 bg-linear-to-r from-amber-50 to-white-500 dark:bg-amber-950 min-h-screen">
            <div class="p-4 md:pl-24 max-w-screen-xl h-full flex items-center">
                <div class="overflow-hidden">
                    <h3 class="text-xl font-semibold text-amber-800 tracking-wider">Lorem, ipsum dolor.</h3>
                    <h4 class="text-2xl md:text-4xl lg:text-6xl font-bold text-slate-700 dark:text-slate-300">Why invest in Jordan</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="col-span-1 space-y-6">
                            <h6 class="text-neutral-800 dark:text-neutral-200 mt-8 font-semibold tracking-wide px-6">Lorem ipsum dolor sit.</h6>
                            <p class="border-l-4 border-amber-800 pl-6 text-slate-950 dark:text-slate-300"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore laborum soluta modi voluptatum, aspernatur quos iusto? Assumenda aperiam est enim. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae cum nobis id?</p>
                        </div>
                        <div class="col-span-1 space-y-6">
                            <h6 class="text-neutral-800 dark:text-neutral-200 mt-8 font-semibold tracking-wide px-6">Lorem ipsum dolor sit.</h6>
                            <ul class="px-6 text-slate-950 dark:text-slate-300">
                                <li><span class="text-amber-600 mr-4">🟔</span> Lorem, ipsum dolor.</li>
                                <li><span class="text-amber-600 mr-4">🟔</span> Lorem, ipsum.</li>
                                <li><span class="text-amber-600 mr-4">🟔</span> Lorem, ipsum dolor.</li>
                                <li><span class="text-amber-600 mr-4">🟔</span> Lorem, ipsum dolor.</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    
        <!-- Right Half -->
        <div class="col-span-1 bg-slate-50 dark:bg-yellow-950 min-h-screen">
            <div class=" max-w-screen-xl h-full flex items-center justify-center ">
                <div class="lg:w-2/3  space-y-4">
                    <h5 class="text-2xl md:text-4xl font-bold text-neutral-700 dark:text-neutral-300">Subscribe to Newsletter</h5>
                    <div class="my-6 w-16 border border-amber-800 dark:border-amber-400"></div>
                    <h6 class="font-semibold text-lg text-neutral-950 dark:text-neutral-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, quisquam.</h6>
                    <div class="flex justify-between my-4">
                        <input type="email" class="py-4:text w-2/3 focus:outline-none px-4 bg-white" placeholder="Enter your email address">
                        <button class="w-1/3 py-4 font-semibold tracking-wider bg-purple-700 hover:bg-purple-900 text-slate-50 hover:text-slate-200 transition duration-300 ease-in-out">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    {{-- Footer --}}
    <footer class="min-h-[75dvh] bg-purple-800 ">
        <div class="container mx-auto grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 py-4 border-b border-white p-4">
            <div class="col-span-4">
                <a href="">
                    <img src="{{ asset('images/logo/puva-black.png') }}" alt="" class="dark:grayscale dark:invert w-24">
                </a>
            </div>
            <div class="col-span-4 flex justify-start items-center gap-4 text-slate-800 dark:text-white font-medium my-4">
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
            <div class="col-span-4 flex flex-col gap-4">
                <a href="" class="font-semibold text-neutral-50 hover:text-neutral-300">About Us</a>
                <a href="" class="font-semibold text-neutral-50 hover:text-neutral-300">Terms of Use</a>
                <a href="" class="font-semibold text-neutral-50 hover:text-neutral-300">Privacy Policy</a>
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
<script>
    const menu = document.getElementById('menu');
    const contentArea = document.getElementById('content-area');
    const sections = document.querySelectorAll('.section');
  
    // Show a section by name
    function showSection(name) {
      sections.forEach(section => {
        section.style.display = section.classList.contains(`${name}-section`) ? 'block' : 'none';
      });
    }
  
    // Set initial state
    showSection('roofing');
  
    // Handle hover
    document.querySelectorAll('.hover-item').forEach(item => {
      item.addEventListener('mouseenter', () => {
        const target = item.getAttribute('data-target');
        showSection(target);
      });
    });
  
    // Revert to default when mouse leaves the whole area
    document.getElementById('interactive-sections').addEventListener('mouseleave', () => {
      showSection('roofing');
    });
  </script>  
</html>