<div class="md:flex md:items-center md:justify-center md:py-5 md:px-10 md:bg-black md:rounded-full sm:my-5 font-bold">
    <div class="flex items-center justify-center md:mx-2">
        <div class="relative">
            <select class="pl-10 pr-3 py-3 border rounded-full">
                <option selected>
                    Location
                </option>
                <option>Data Structures</option>
                <option>Algorithms</option>
                <option>DBMS</option>
            </select>
            <div
                class="absolute inset-y-0 left-0 px-3  
                            flex items-center  
                            pointer-events-none">
                <img src="{{ asset('assets/images/icons/location.png') }}" class="pr-3">
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center md:mx-2">
        <div class="relative">
            <select class="pl-10 pr-5 py-3 border rounded-full">
                <option selected>
                    Property Type
                </option>
                <option>Data Structures</option>
                <option>Algorithms</option>
                <option>DBMS</option>
            </select>
            <div
                class="absolute inset-y-0 left-0 px-3  
                            flex items-center  
                            pointer-events-none mr-3">
                <img src="{{ asset('assets/images/icons/Roofing.png') }}">
            </div>
        </div>
    </div>
    <img src="menu_vertical.png" class="three_dot" alt="">

    <div class="mx-4">
        <button class="py-3 px-5 bg-yellow-400 hover:text-bright_red text-black rounded-full"><i
                class="fa-solid fa-magnifying-glass mr-3"></i>Search</button>
    </div>

</div>
