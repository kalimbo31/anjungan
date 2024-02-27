@extends('layouts.partials.main')
@section('content')
<section class="w-full relative">
    
    {{-- <div class="duration-700 ease-in-out absolute inset-0 blur-sm" data-carousel-item>
        <img src="/images/Untitled-1.jpg"
            class="bg-blend-multiply bg-black absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div> --}}
    <div id="default-carousel" class="w-full relative" data-carousel="slide"> 
        <!-- Carousel wrapper -->
        <div class="relative h-96 overflow-hidden md:h-screen">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/slider/1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/slider/2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/slider/3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/slider/1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/slider/2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- <div class="max-w-screen-lg px-4 mx-auto absolute inset-0 flex flex-col justify-center items-center">
        <div class="text-center col-span-12">
            <h1
                class=" mb-4 text-2xl sm:text-3xl font-extrabold lg:leading-none leading-normal md:text-4xl lg:text-5xl text-green">
                Selamat Datang di Balai Pemantapan Kawasan Hutan dan Tata Lingkungan</h1>
            <p
                class="mx-auto mb-8 font-light text-green lg:mb-8 md:text-lg lg:text-xl text-sm">
                Jl.
                Rusli Datau No.10, Dulomo Sel., Kec. Kota Utara, Kota Gorontalo, Gorontalo 96128</p>

            <a href="#sambutan"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br font-medium rounded-lg md:text-lg px-5 py-3 text-center md:w-40 w-20 text-sm">Lihat
                Sambutan</a>
        </div>
    </div> --}}
</section>




<section class="bg-gray-50 w-full py-8 text-center lg:py-20 overflow-hidden">
    <div class="max-w-screen-lg mx-auto text-center mb-5">
        <h1 class="text-3xl font-semibold text-gray-700 mb-2">PETA</h1>
        <h2 class="text-lg text-gray-500">Informasi Pemetaan
        </h2>
    </div>
    <img src="{{ asset('images/peta2.jpg') }}" alt="">
    {{-- <div class="max-w-screen-lg py-5 mx-auto grid md:grid-cols-3 gap-3 overflow-hidden">
        <button data-tooltip-target="tooltip-default1" type="button"
            class="bg-green-600 shadow-lg rounded-lg px-20 py-10 text-center">
            <span class="text-2xl font-semibold text-gray-200 block mb-4">Tata Usaha</span>
            <span class="text-xl font-medium text-gray-200">19 Orang</span>
        </button>
        <div id="tooltip-default1" role="tooltip"
            class="absolute z-10 invisible inline-block p-10 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            <span class="block">PNS 5 Orang</span>
            <span>PPNPN 14 Orang</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-default2" type="button"
            class="bg-green-600 shadow-lg rounded-lg px-20 py-10 text-center">
            <span class="text-2xl font-semibold text-gray-200 block mb-4">PPKH</span>
            <span class="text-xl font-medium text-gray-200">14 Orang</span>
        </button>
        <div id="tooltip-default2" role="tooltip"
            class="absolute z-10 invisible inline-block p-10 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            <span class="block">PNS 12 Orang</span>
            <span>PPNPN 2 Orang</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-default3" type="button"
            class="bg-green-600 shadow-lg rounded-lg px-20 py-10 text-center">
            <span class="text-2xl font-semibold text-gray-200 block mb-4">SDHTL</span>
            <span class="text-xl font-medium text-gray-200">17 Orang</span>
        </button>
        <div id="tooltip-default3" role="tooltip"
            class="absolute z-10 invisible inline-block p-10 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            <span class="block">PNS 13 Orang</span>
            <span>PPNPN 4 Orang</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div> --}}

</section>

@include('sections.posts')

<section id="sambutan" class="flex justify-center items-center overflow-hidden">
    <div class="flex flex-col overflow-hidden h-screen">
        <img class="thumbnail blur-sm w-screen h-[110vh] bg-blend-multiply"
            srcset="{{ asset('images/kantor.jpg') }} 1x, {{ asset('images/kantor.jpg') }} 2x" alt="">
    </div>
    
    <div class="w-full absolute h-screen bg-black opacity-70 space-y-96"></div>

    <figure class="max-w-screen-md absolute px-5 duration-1000 py-5 overflow-hidden" id="blockquote">
        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                fill="currentColor" />
        </svg>
        <blockquote>
            <p class="text-sm text-center font-medium text-gray-100 md:text-2xl">"Selamat datang di website resmi Balai
                Pemantapan Kawasan Hutan dan Tata Lingkungan! Kami berkomitmen untuk melestarikan kekayaan alam dan
                lingkungan. Terus dukung upaya kami dalam menjaga keindahan alam kita. Terima kasih!"</p>
        </blockquote>
        <figcaption class="flex items-center justify-center mt-6 space-x-3">
            <a href="{{ asset('images/fiqri.jpg') }}" target="_blank">
                <img class="w-6 h-6 rounded-full" src="{{ asset('images/fiqri.jpg') }}" alt="profile picture">
            </a>
            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                <div class="pr-3 font-medium text-gray-300">Nama Kepala Balai</div>
                <div class="pl-3 text-sm font-light text-gray-300">Kepala Balai</div>
            </div>
        </figcaption>
    </figure>
</section>

<section class="bg-gray-50 w-full px-4 py-8 mx-auto lg:py-16 lg:px-6 mySwiper">
    <div class="max-w-screen-lg mx-auto pb-4 text-center mb-5">

        <h1 class="sm:text-3xl text-2xl font-semibold text-gray-700 mb-2">Informasi PPKH - KLHK</h1>
        <h2 class="text-base text-gray-400">Pelayanan Informasi Permohonan Persetujuan Penggunaan Kawasan Hutan (PPKH)
        </h2>
    </div>
    <div class="max-w-screen-xl mx-auto flex space-x-3 text-center overflow-x-auto">
        @include('sections.swiper')

    </div>
</section>
@endsection