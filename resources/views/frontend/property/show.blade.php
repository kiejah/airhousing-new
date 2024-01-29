@extends('layouts.frontend.app')
<section>

    @include('frontend.frontnavinner')

</section>
<section>
    <div class="mx-auto inner-container mt-5">
        <div class="grid sm:grid-cols-1 md:grid-cols-3">
            <div class="bg-gray-200 p-5">
                <div class="rounded">
                    <img class="img-fluid property-img rounded"
                        src="{{ asset('storage/' . $property->thumbnail->image) }}" alt="{{ $property->name }}">
                </div>
                <div class="py-2 text-2xl font-bold text-black">
                    {{ $property->name }}
                </div>
                <div class="py-2 text-2xl text-black">
                    {{ $property->description }}
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Place_Marker.png') }}" class="featured-img" alt="">
                    <span class="py-2 ml-2 font-bold">Located in {{ $property->location->name }}
                        {{ $property->state }} {{ $property->country }}</span>

                </div>
                <hr>
                <div class="flex items-center text-black">
                    <span class="py-2 ml-2">Property managed by:</span>
                </div>
                <div class="flex items-center text-black">
                    <img src="{{ asset('assets/images/icons/Saly-1.png') }}" class="featured-img" alt="">
                    <span class="py-2 font-bold ml-2">{{ $property->manager->first_name }}
                        {{ $property->manager->last_name }}</span>
                </div>
                <div class="flex items-center text-black">
                    <span class="py-2 ml-2">Contact Information</span>
                </div>

                <div class="flex items-center text-black">
                    <span class="py-2 font-bold ml-2">{{ $property->manager->email }}</span>
                </div>

            </div>

            <div class="flex md:col-span-2 justify-center">
                @include('frontend.property.slider')
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('assets/js/jssor.slider-28.1.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/unit_slider.js') }}"></script>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>
    @endpush
</section>
