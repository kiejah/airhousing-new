@extends('layouts.frontend.app')
{{-- @include('frontend.search') --}}
<section>

    <div class='flex justify-between items-center mx-auto nav-bg top-nav'>
        <img src={{ asset('assets/images/logo/black_logo.png') }} class='logo'>
        <ul class='flex text-black font-bold'>
            <li class='mx-3'><a class= "hover:text-bright_red" href="#">Home</a></li>
            <li class='mx-3'>About us</li>
            <li class='mx-3'>Properties</li>
            <li class='mx-3'>Contact us</li>
            <li class='mx-3'><a href="#"
                    class="rounded-full lg:p-4 md:p-2 border-2 border-bright_red getStarted hover:text-white">Get
                    Started</a>
            </li>
        </ul>
    </div>
    <div class="background-container">
        <div class="content">
            @include('frontend.slider')
            @include('frontend.search')
        </div>
    </div>

</section>
<section class="mt-5">
    <div class="container featured-properties-title my-5">
        <span class="p-2 text-black font-bold text-lg"> Featured Properties</span>
    </div>
    <div class="container flex featured ">
        <div class="w-96 mr-5 shadow card-container">
            <img src="{{ asset('assets/images/landing/featured/papillon-lagoon-reef.jpg') }}" class="featured-img"
                alt="" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
            <div class="bg-featured_card_bg p-2">
                <div class="flex justify-between items-center text-black">
                    <span class="py-2 text-2xl font-bold">Kianda Estate</span>
                    <button class="px-3 py-1 bg-yellow_bg inline-block rounded shadow units_btn font-bold"> 25
                        units</button>
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img" alt="">
                    <span class="py-2 text-xl font-bold ml-2">Limuru</span>
                </div>
                <p class="font-bold text-black my-3">
                    A tranquil environment for you and your family. With ample security and water.
                </p>
                <div class="flex my-5">
                    <button class=" px-5 py-1 bg-tt_black inline-block rounded-full shadow font-bold text-white">View
                        Property</button>
                </div>

            </div>

        </div>

        <div class="w-96 mr-5 shadow card-container">
            <img src="{{ asset('assets/images/landing/featured/papillon-lagoon-reef.jpg') }}" class="featured-img"
                alt="" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
            <div class="bg-featured_card_bg p-2">
                <div class="flex justify-between items-center text-black">
                    <span class="py-2 text-2xl font-bold">Kianda Estate</span>
                    <button class="px-3 py-1 bg-yellow_bg inline-block rounded shadow units_btn font-bold"> 25
                        units</button>
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img" alt="">
                    <span class="py-2 text-xl font-bold ml-2">Limuru</span>
                </div>
                <p class="font-bold text-black my-3">
                    A tranquil environment for you and your family. With ample security and water.
                </p>
                <div class="flex my-5">
                    <button class=" px-5 py-1 bg-tt_black inline-block rounded-full shadow font-bold text-white">View
                        Property</button>
                </div>

            </div>
        </div>

        <div class="w-96 mr-5 shadow card-container">
            <img src="{{ asset('assets/images/landing/featured/papillon-lagoon-reef.jpg') }}" class="featured-img"
                alt="" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
            <div class="bg-featured_card_bg p-2">
                <div class="flex justify-between items-center text-black">
                    <span class="py-2 text-2xl font-bold">Kianda Estate</span>
                    <button class="px-3 py-1 bg-yellow_bg inline-block rounded shadow units_btn font-bold"> 25
                        units</button>
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img" alt="">
                    <span class="py-2 text-xl font-bold ml-2">Limuru</span>
                </div>
                <p class="font-bold text-black my-3">
                    A tranquil environment for you and your family. With ample security and water.
                </p>
                <div class="flex my-5">
                    <button class=" px-5 py-1 bg-tt_black inline-block rounded-full shadow font-bold text-white">View
                        Property</button>
                </div>

            </div>
        </div>
        <div class="w-96 mr-5 shadow card-container">
            <img src="{{ asset('assets/images/landing/featured/papillon-lagoon-reef.jpg') }}" class="featured-img"
                alt="" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
            <div class="bg-featured_card_bg p-2">
                <div class="flex justify-between items-center text-black">
                    <span class="py-2 text-2xl font-bold">Kianda Estate</span>
                    <button class="px-3 py-1 bg-yellow_bg inline-block rounded shadow units_btn font-bold"> 25
                        units</button>
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img" alt="">
                    <span class="py-2 text-xl font-bold ml-2">Limuru</span>
                </div>
                <p class="font-bold text-black my-3">
                    A tranquil environment for you and your family. With ample security and water.
                </p>
                <div class="flex my-5">
                    <button class=" px-5 py-1 bg-tt_black inline-block rounded-full shadow font-bold text-white">View
                        Property</button>
                </div>

            </div>
        </div>
    </div>
</section>
