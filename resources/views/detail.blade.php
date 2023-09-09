@extends('layouts/main')

@section('container')
    <section id="home" class="relative pt-24">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-5 mx-auto lg:pl-36 lg:pt-16">
                    <h1 style="font-family: bangers" class="text-blue text-2xl lg:text-2xl">Portofolio</h1>
                    <h1 class="text-white font-bold text-2xl w-2/3 lg:text-3xl">AMDEVSHOP YAITU PLATFORM YANG MENYEDIAKAN TOP-UP
                        E-VOUCHER GAME MOBILE LEGENDS</h1>
                    <div class="text-white text-base lg:text-3xl my-2 grid grid-cols-4 w-96">
                        <div class="flex">
                            <span class="pr-2"><svg width="19" height="19" viewBox="0 0 55 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M48.8921 0.289795H6.22542C3.29209 0.289795 0.918756 2.68979 0.918756 5.62313L0.89209 37.6231C0.89209 40.5565 3.29209 42.9565 6.22542 42.9565H48.8921C51.8254 42.9565 54.2254 40.5565 54.2254 37.6231V5.62313C54.2254 2.68979 51.8254 0.289795 48.8921 0.289795ZM35.5588 37.6231H6.22542V26.9565H35.5588V37.6231ZM35.5588 24.2898H6.22542V13.6231H35.5588V24.2898ZM48.8921 37.6231H38.2254V13.6231H48.8921V37.6231Z"
                                        fill="white" />
                                </svg>
                            </span>
                            <span class="text-sm">website</span>
                        </div>

                        <div class="flex">
                            <span>
                                <svg class="pr-2" width="21" height="21" viewBox="0 0 49 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9832 24.2173H16.3165V29.5506H10.9832V24.2173ZM48.3165 10.884V48.2173C48.3165 51.1506 45.9165 53.5506 42.9832 53.5506H5.64986C2.68986 53.5506 0.316528 51.1506 0.316528 48.2173L0.343195 10.884C0.343195 7.95062 2.68986 5.55062 5.64986 5.55062H8.31653V0.217285H13.6499V5.55062H34.9832V0.217285H40.3165V5.55062H42.9832C45.9165 5.55062 48.3165 7.95062 48.3165 10.884ZM5.64986 16.2173H42.9832V10.884H5.64986V16.2173ZM42.9832 48.2173V21.5506H5.64986V48.2173H42.9832ZM32.3165 29.5506H37.6499V24.2173H32.3165V29.5506ZM21.6499 29.5506H26.9832V24.2173H21.6499V29.5506Z" fill="white"/>
                                </svg>                                    
                            </span>
                            <span class="text-sm">08/09/2023</span>
                        </div>
                    </div>
                    <img src="{{ asset('images/AmdevShop.png') }}" alt="img" class="w-full rounded-md my-8 lg:w-1/2">
                    <h1 class="text-white font-bold my-7 text-xl">Deskripsi</h1>
                    <p class="text-white my-2 font-normal w-1/2">Sebuah Platform yang meneyediakan E-Voucer Game Mobile Legends, yang melatarbelakangi pembuatan website ini kebetulan salah satu dari teman kami ada yang menjual E-Voucher Game dengan transaksi manual maka kami ingin mebuatkan website dengan tujuan transaksi pembelian E-Voucher Game secara otomatis. </p>
                    <h1 class="text-white font-bold my-7 text-xl">Teknologi</h1>
                    <ul class="text-white font-normal list-disc ml-4">
                        <li>Laravel</li>
                        <li>Boostrap</li>
                        <li>Google Recaptcha</li>
                    </ul>
                    <h1 class="text-white font-bold my-7 text-xl">Link</h1>
                    <div class="text-white my-4 hover:underline font-thin hover:font-normal">
                        <a href="https://amdevshop.000webhostapp.com/">https://amdevshop.000webhostapp.com/</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
