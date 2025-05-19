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

    <section class="bg-emerald-50 dark:bg-emerald-950 min-h-screen py-6 md:py-12 lg:py-24 transition-colors duration-300">
        <div class="w-11/12 lg:w-3/4 mx-auto bg-emerald-100 dark:bg-emerald-900 rounded-lg shadow-lg h-full pb-6 md:pb-10">
            <h1 class="font-serif text-center text-3xl sm:text-4xl md:text-5xl text-emerald-900 dark:text-emerald-100 mb-10 pt-10"> Moving Cost Calculator </h1>
        
            <form class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 px-6 pb-12 border-b border-emerald-500 dark:border-emerald-700">
            
                <!-- Moving From -->
                <div class="col-span-1">
                    <label class="text-lg tracking-wide text-emerald-900 dark:text-emerald-100 mb-2 block">Where are you moving from?</label>
                    <input type="text" placeholder="Salt Lake City, Utah, USA" class="rounded-md border border-emerald-400 dark:border-emerald-300 bg-white dark:bg-emerald-800 text-emerald-900 dark:text-emerald-100 placeholder:text-slate-500 dark:placeholder:text-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 w-full px-4 py-2 transition">
                </div>
            
                <!-- Moving To -->
                <div class="col-span-1">
                    <label class="text-lg tracking-wide text-emerald-900 dark:text-emerald-100 mb-2 block">Where are you moving to?</label>
                    <input type="text" placeholder="Austin, TX, USA" class="rounded-md border border-emerald-400 dark:border-emerald-300 bg-white dark:bg-emerald-800 text-emerald-900 dark:text-emerald-100 placeholder:text-slate-500 dark:placeholder:text-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 w-full px-4 py-2 transition">
                </div>
            
                <!-- What are you moving -->
                <div class="col-span-1">
                    <label class="text-lg tracking-wide text-emerald-900 dark:text-emerald-100 mb-2 block">What are you moving?</label>
                    <select class="rounded-md border border-emerald-400 dark:border-emerald-300 bg-white dark:bg-emerald-800 text-emerald-900 dark:text-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 w-full px-4 py-2 transition">
                    <option>A few Items</option>
                    <option>Studio Apartment</option>
                    <option>1 Bedroom Residence</option>
                    <option>2 Bedroom Residence</option>
                    <option>3 Bedroom Residence</option>
                    <option>3+ Bedroom Residence</option>
                    </select>
                </div>
            
                <!-- When are you moving -->
                <div class="col-span-1">
                    <label class="text-lg tracking-wide text-emerald-900 dark:text-emerald-100 mb-2 block">When are you moving?</label>
                    <input type="date" class="rounded-md border border-emerald-400 dark:border-emerald-300 bg-white dark:bg-emerald-800 text-emerald-900 dark:text-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 w-full px-4 py-2 transition">
                </div>
            
                <!-- Submit -->
                <div class="col-span-1 md:col-span-2 relative text-center">
                    <button class="absolute top-6 -translate-x-1/2 py-3 px-10 rounded-full bg-emerald-400 dark:bg-emerald-700 hover:bg-emerald-500 dark:hover:bg-emerald-600 text-emerlad-950 dark:text-emerald-50 font-semibold tracking-wider transition"> Calculate </button>
                </div>
            </form>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 my-6 md:my-12 lg:my-16 p-4">
                <div class="col-span-1 text-center">
                    <div class="relative w-1/3 aspect-square bg-emerald-200 dark:bg-emerald-800 rounded-lg overflow-hidden mx-auto mb-2 p-4">
                        <img src="{{ asset('images/logo/icons/shirt.png') }}" class="dark:invert" alt="">
                    </div>
                    <h6 class="uppercase dark:text-neutral-100 tracking-wide">Professional</h6>
                    <p class="font-bold text-lg tracking-wider text-blue-700 dark:text-blue-300">$1,080</p>
                </div>
                <div class="col-span-1 text-center">
                    <div class="relative w-1/3 aspect-square bg-emerald-200 dark:bg-emerald-800 rounded-lg overflow-hidden mx-auto mb-2 p-4">
                        <img src="{{ asset('images/logo/icons/container-storage.png') }}" class="dark:invert" alt="">
                    </div>
                    <h6 class="uppercase dark:text-neutral-100 tracking-wide">Container</h6>
                    <p class="font-bold text-lg tracking-wider text-blue-700 dark:text-blue-300">$1,458</p>
                </div>
                <div class="col-span-1 text-center">
                    <div class="relative w-1/3 aspect-square bg-emerald-200 dark:bg-emerald-800 rounded-lg overflow-hidden mx-auto mb-2 p-4">
                        <img src="{{ asset('images/logo/icons/truck-container.png') }}" class="dark:invert" alt="">
                    </div>
                    <h6 class="uppercase dark:text-neutral-100 tracking-wide">Freight</h6>
                    <p class="font-bold text-lg tracking-wider text-blue-700 dark:text-blue-300">$1,365</p>
                </div>
                <div class="col-span-1 text-center">
                    <div class="relative w-1/3 aspect-square bg-emerald-200 dark:bg-emerald-800 rounded-lg overflow-hidden mx-auto mb-2 p-4">
                        <img src="{{ asset('images/logo/icons/shipping-fast.png') }}" class="dark:invert" alt="">
                    </div>
                    <h6 class="uppercase dark:text-neutral-100 tracking-wide">Rental Truck</h6>
                    <p class="font-bold text-lg tracking-wider text-blue-700 dark:text-blue-300">$962</p>
                </div>
            </div>
        </div>
    </section>
      
    <section class="min-h-screen bg-emerald-50">
        <div class="w-11/12 md:w-5/6 mx-auto grid grid-cols-3 sm:grid-cols-6 md:grid-cols-9 lg:grid-cols-12 py-4 gap-6 lg:py-12">
            <div class="col-span-3 aspect-[1.3] border p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out rounded-lg bg-emerald-50  dark:bg-amber-800">
                <fieldset class="h-full w-full flex flex-col justify-between">
                    <legend class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Any Senior Citizen with you?</legend>
            
                    <div class="flex h-full gap-4">
                        <!-- Yes Option -->
                        <input type="radio" name="senior_citizen" id="yes" value="true" class="hidden peer/yes" />
                        <label for="yes" class="flex-1 flex items-center justify-center text-lg font-semibold rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/yes:border-blue-600 peer-checked/yes:bg-blue-100 dark:peer-checked/yes:bg-blue-900 dark:peer-checked/yes:border-blue-400 peer-checked/yes:text-blue-700 dark:peer-checked/yes:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            Yes
                        </label>
            
                        <!-- No Option -->
                        <input type="radio" name="senior_citizen" id="no" value="false" class="hidden peer/no" />
                        <label for="no" class="flex-1 flex items-center justify-center text-lg font-semibold rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/no:border-red-600 peer-checked/no:bg-red-100 dark:peer-checked/no:bg-red-900 dark:peer-checked/no:border-red-400 peer-checked/no:text-red-700 dark:peer-checked/no:text-red-300 hover:shadow-md transition-all cursor-pointer">
                            No
                        </label>
                    </div>
                </fieldset>
            </div>
            
            <div class="col-span-3 aspect-[1.3] border p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out rounded-lg bg-emerald-50 dark:bg-amber-800">
                <fieldset class="h-full w-full flex flex-col justify-between">
                    <legend class="text-lg font-semibold text-gray-700 dark:text-white mb-4">How many bedrooms will be shifted?</legend>
            
                    <div class="grid grid-cols-2 gap-4 h-full">
                        <!-- Bedroom 1 -->
                        <input type="radio" name="bedrooms" id="bedroom-1" value="1" class="hidden peer/bed1" />
                        <label for="bedroom-1" class="flex items-center justify-center text-lg font-semibold rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/bed1:border-blue-600 peer-checked/bed1:bg-blue-100 dark:peer-checked/bed1:bg-blue-900 dark:peer-checked/bed1:border-blue-400 peer-checked/bed1:text-blue-700 dark:peer-checked/bed1:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            1
                        </label>
            
                        <!-- Bedroom 2 -->
                        <input type="radio" name="bedrooms" id="bedroom-2" value="2" class="hidden peer/bed2" />
                        <label for="bedroom-2" class="flex items-center justify-center text-lg font-semibold rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/bed2:border-blue-600 peer-checked/bed2:bg-blue-100 dark:peer-checked/bed2:bg-blue-900 dark:peer-checked/bed2:border-blue-400 peer-checked/bed2:text-blue-700 dark:peer-checked/bed2:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            2
                        </label>
            
                        <!-- Bedroom 3 -->
                        <input type="radio" name="bedrooms" id="bedroom-3" value="3" class="hidden peer/bed3" />
                        <label for="bedroom-3" class="flex items-center justify-center text-lg font-semibold rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/bed3:border-blue-600 peer-checked/bed3:bg-blue-100 dark:peer-checked/bed3:bg-blue-900 dark:peer-checked/bed3:border-blue-400 peer-checked/bed3:text-blue-700 dark:peer-checked/bed3:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            3
                        </label>
            
                        <!-- Bedroom 4+ -->
                        <input type="radio" name="bedrooms" id="bedroom-4plus" value="4+" class="hidden peer/bed4" />
                        <label for="bedroom-4plus" class="flex items-center justify-center text-lg font-semibold rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/bed4:border-blue-600 peer-checked/bed4:bg-blue-100 dark:peer-checked/bed4:bg-blue-900 dark:peer-checked/bed4:border-blue-400 peer-checked/bed4:text-blue-700 dark:peer-checked/bed4:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            4+
                        </label>
                    </div>
                </fieldset>
            </div>
            
            <div class="col-span-3 aspect-[0.75] border p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out rounded-lg  bg-emerald-50 dark:bg-amber-800">
                <fieldset class="h-full w-full flex flex-col justify-between">
                    <legend class="text-lg font-semibold text-gray-700 dark:text-white mb-4">
                        What additional services do you need?
                    </legend>
            
                    <div class="grid grid-cols-2 gap-3 h-full">
                        <!-- Packing -->
                        <input type="checkbox" name="services[]" id="packing" value="Packing" class="hidden peer/pack" />
                        <label for="packing" class="flex items-center justify-center text-sm text-center font-medium rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/pack:border-blue-600 peer-checked/pack:bg-blue-100 dark:peer-checked/pack:bg-blue-900 dark:peer-checked/pack:border-blue-400 peer-checked/pack:text-blue-700 dark:peer-checked/pack:text-blue-300 hover:shadow-md transition-all cursor-pointer px-2 py-3">
                            Packing
                        </label>
            
                        <!-- Unpacking -->
                        <input type="checkbox" name="services[]" id="unpacking" value="Unpacking" class="hidden peer/unpack" />
                        <label for="unpacking" class="flex items-center justify-center text-sm text-center font-medium rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/unpack:border-blue-600 peer-checked/unpack:bg-blue-100 dark:peer-checked/unpack:bg-blue-900 dark:peer-checked/unpack:border-blue-400 peer-checked/unpack:text-blue-700 dark:peer-checked/unpack:text-blue-300 hover:shadow-md transition-all cursor-pointer px-2 py-3">
                            Unpacking
                        </label>
            
                        <!-- Furniture Disassembly -->
                        <input type="checkbox" name="services[]" id="disassembly" value="Furniture Disassembly" class="hidden peer/dis" />
                        <label for="disassembly" class="flex items-center justify-center text-sm text-center font-medium rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/dis:border-blue-600 peer-checked/dis:bg-blue-100 dark:peer-checked/dis:bg-blue-900 dark:peer-checked/dis:border-blue-400 peer-checked/dis:text-blue-700 dark:peer-checked/dis:text-blue-300 hover:shadow-md transition-all cursor-pointer px-2 py-3">
                            Furniture Disassembly
                        </label>
            
                        <!-- Storage -->
                        <input type="checkbox" name="services[]" id="storage" value="Storage" class="hidden peer/store" />
                        <label for="storage" class="flex items-center justify-center text-sm text-center font-medium rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/store:border-blue-600 peer-checked/store:bg-blue-100 dark:peer-checked/store:bg-blue-900 dark:peer-checked/store:border-blue-400 peer-checked/store:text-blue-700 dark:peer-checked/store:text-blue-300 hover:shadow-md transition-all cursor-pointer px-2 py-3">
                            Storage
                        </label>
            
                        <!-- Cleaning -->
                        <input type="checkbox" name="services[]" id="cleaning" value="Cleaning" class="hidden peer/clean" />
                        <label for="cleaning" class="flex items-center justify-center text-sm text-center font-medium rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/clean:border-blue-600 peer-checked/clean:bg-blue-100 dark:peer-checked/clean:bg-blue-900 dark:peer-checked/clean:border-blue-400 peer-checked/clean:text-blue-700 dark:peer-checked/clean:text-blue-300 hover:shadow-md transition-all cursor-pointer px-2 py-3">
                            Cleaning
                        </label>
            
                        <!-- Vehicle Transport -->
                        <input type="checkbox" name="services[]" id="vehicle" value="Vehicle Transport" class="hidden peer/vehicle" />
                        <label for="vehicle" class="flex items-center justify-center text-sm text-center font-medium rounded-lg border border-gray-300 dark:border-gray-600 peer-checked/vehicle:border-blue-600 peer-checked/vehicle:bg-blue-100 dark:peer-checked/vehicle:bg-blue-900 dark:peer-checked/vehicle:border-blue-400 peer-checked/vehicle:text-blue-700 dark:peer-checked/vehicle:text-blue-300 hover:shadow-md transition-all cursor-pointer px-2 py-3">
                            Vehicle Transport
                        </label>
                    </div>
                </fieldset>
            </div>
            
            <div class="col-span-3 border p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out rounded-lg bg-emerald-50 dark:bg-amber-800">
                <fieldset class="h-full w-full flex flex-col justify-between">
                    <legend class="text-lg font-semibold text-gray-700 dark:text-white mb-4">
                        What best describes the type of residence you're moving from?
                    </legend>
            
                    <div class="flex flex-col gap-3 h-full">
                        <!-- Option 1 -->
                        <input type="radio" name="residence_type" id="studio" value="Studio Apartment" class="hidden peer/studio" />
                        <label for="studio" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium peer-checked/studio:border-blue-600 peer-checked/studio:bg-blue-100 dark:peer-checked/studio:bg-blue-900 dark:peer-checked/studio:border-blue-400 peer-checked/studio:text-blue-700 dark:peer-checked/studio:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            Studio Apartment
                        </label>
            
                        <!-- Option 2 -->
                        <input type="radio" name="residence_type" id="1-2bed" value="1-2 Bedroom Apartment" class="hidden peer/a12bed" />
                        <label for="1-2bed" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium peer-checked/a12bed:border-blue-600 peer-checked/a12bed:bg-blue-100 dark:peer-checked/a12bed:bg-blue-900 dark:peer-checked/a12bed:border-blue-400 peer-checked/a12bed:text-blue-700 dark:peer-checked/a12bed:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            1-2 Bedroom Apartment
                        </label>
            
                        <!-- Option 3 -->
                        <input type="radio" name="residence_type" id="3plusbed" value="3+ Bedroom Apartment" class="hidden peer/a3bed" />
                        <label for="3plusbed" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium peer-checked/a3bed:border-blue-600 peer-checked/a3bed:bg-blue-100 dark:peer-checked/a3bed:bg-blue-900 dark:peer-checked/a3bed:border-blue-400 peer-checked/a3bed:text-blue-700 dark:peer-checked/a3bed:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            3+ Bedroom Apartment
                        </label>
            
                        <!-- Option 4 -->
                        <input type="radio" name="residence_type" id="home" value="Single-Family Home" class="hidden peer/home" />
                        <label for="home" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium peer-checked/home:border-blue-600 peer-checked/home:bg-blue-100 dark:peer-checked/home:bg-blue-900 dark:peer-checked/home:border-blue-400 peer-checked/home:text-blue-700 dark:peer-checked/home:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            Single-Family Home
                        </label>
            
                        <!-- Option 5 -->
                        <input type="radio" name="residence_type" id="townhouse" value="Townhouse" class="hidden peer/town" />
                        <label for="townhouse" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium peer-checked/town:border-blue-600 peer-checked/town:bg-blue-100 dark:peer-checked/town:bg-blue-900 dark:peer-checked/town:border-blue-400 peer-checked/town:text-blue-700 dark:peer-checked/town:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            Townhouse
                        </label>
            
                        <!-- Option 6 -->
                        <input type="radio" name="residence_type" id="other" value="Other" class="hidden peer/other" />
                        <label for="other" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium peer-checked/other:border-blue-600 peer-checked/other:bg-blue-100 dark:peer-checked/other:bg-blue-900 dark:peer-checked/other:border-blue-400 peer-checked/other:text-blue-700 dark:peer-checked/other:text-blue-300 hover:shadow-md transition-all cursor-pointer">
                            Other
                        </label>
                    </div>
                </fieldset>
            </div>
            
            <div class="col-span-3 border aspect-[1.67] p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out"></div>
            <div class="col-span-3 border aspect-[1.67] p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out"></div>
            <div class="col-span-3 border aspect-[1.67] p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out"></div>
            <div class="col-span-3 border aspect-[1.67] p-4 shadow-sm hover:shadow-lg transition-all duration-300 ease-in-out"></div>            
        </div>
    </section>
    @production
        <!-- Only load JS in production if needed -->
        @vite('resources/js/app.js')
    @endproduction
</body>
</html>