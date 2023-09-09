@extends('layouts/main')

@section('container')
    {{-- Profil --}}
    <section id="home" class="relative pt-32 lg:mb-40">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-5 mx-auto lg:w-1/2 lg:pl-36 lg:pt-16" data-aos="fade-right" data-aos-delay="200">
                    <h1 style="font-family: bangers" class="text-blue text-5xl lg:text-7xl">Hello I'M</h1>
                    <h1 style="inter" class="text-white font-bold text-2xl lg:text-4xl">Muhammad Abid Murtadho</h1>
                    <p style="inter" class="text-white text-base lg:text-xl leading-relaxed ">Mahasiswa
                        <span class="block">Universitas Internasional Semen Indonesia</span>
                    </p>
                    <p class="text-white mb-8">______________________________________________</p>
                    <a href="#about"
                        class="text-base font-semibold border hover:bg-white text-blue bg-primary py-3 border-blue px-7 rounded-full mr-2">About
                        Me</a>
                    <a href="https://drive.google.com/file/d/1GFkNsLIvApsRt6pgppTJ4ksP8-Btcgj7/view?usp=sharing"
                        class="text-base font-semibold border border-blue text-white bg-blue py-3 px-7 hover:bg-primary hover:border-b-blue rounded-full ml-2">Download
                        CV</a>
                    <div class="flex mt-9 gap-4">
                        <h1 class="text-white text-lg lg:text-xl">Follow me!!</h1>
                        <a href="https://www.linkedin.com/in/muhammad-abid-murtadho-903085214/">
                            <svg width="40" height="40" class="hover:scale-110" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="30" fill="#0054F7" />
                                <path
                                    d="M40.6667 15C41.5507 15 42.3986 15.3512 43.0237 15.9763C43.6488 16.6014 44 17.4493 44 18.3333V41.6667C44 42.5507 43.6488 43.3986 43.0237 44.0237C42.3986 44.6488 41.5507 45 40.6667 45H17.3333C16.4493 45 15.6014 44.6488 14.9763 44.0237C14.3512 43.3986 14 42.5507 14 41.6667V18.3333C14 17.4493 14.3512 16.6014 14.9763 15.9763C15.6014 15.3512 16.4493 15 17.3333 15H40.6667ZM39.8333 40.8333V32C39.8333 30.559 39.2609 29.177 38.2419 28.1581C37.223 27.1391 35.841 26.5667 34.4 26.5667C32.9833 26.5667 31.3333 27.4333 30.5333 28.7333V26.8833H25.8833V40.8333H30.5333V32.6167C30.5333 31.3333 31.5667 30.2833 32.85 30.2833C33.4688 30.2833 34.0623 30.5292 34.4999 30.9668C34.9375 31.4043 35.1833 31.9978 35.1833 32.6167V40.8333H39.8333ZM20.4667 24.2667C21.2093 24.2667 21.9215 23.9717 22.4466 23.4466C22.9717 22.9215 23.2667 22.2093 23.2667 21.4667C23.2667 19.9167 22.0167 18.65 20.4667 18.65C19.7196 18.65 19.0032 18.9468 18.475 19.475C17.9468 20.0032 17.65 20.7196 17.65 21.4667C17.65 23.0167 18.9167 24.2667 20.4667 24.2667ZM22.7833 40.8333V26.8833H18.1667V40.8333H22.7833Z"
                                    fill="#0E0E0E" />
                            </svg>
                        </a>
                        <a href="https://github.com/mabidmo">
                            <svg width="40" height="40" class="hover:scale-110" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="30" fill="#0054F7" />
                                <path
                                    d="M36.8282 14.3149C33.0786 13.4601 29.1791 13.4601 25.4294 14.3149C23.2638 13.0119 21.6104 12.413 20.408 12.1602C19.8948 12.0466 19.3696 11.993 18.8436 12.0007C18.6042 12.0071 18.3659 12.0353 18.1319 12.085L18.1012 12.091L18.089 12.097H18.0798L18.5 13.5445L18.0798 12.1C17.8643 12.1598 17.6647 12.2651 17.4951 12.4086C17.3255 12.5521 17.19 12.7303 17.0982 12.9306C16.1932 14.9189 16.0208 17.154 16.6104 19.2532C15.0832 21.0689 14.251 23.3512 14.2577 25.7053C14.2577 30.3788 15.6626 33.5205 18.0583 35.5398C19.7362 36.9542 21.773 37.7065 23.816 38.1369C23.4945 39.0632 23.3733 40.045 23.4601 41.0198V42.8194C22.2117 43.0752 21.3466 42.9939 20.7301 42.7953C19.9601 42.5455 19.3681 42.043 18.8006 41.3207C18.504 40.9314 18.2275 40.5277 17.9724 40.111L17.7975 39.8311C17.5768 39.471 17.3477 39.1158 17.1104 38.7658C16.5276 37.9202 15.6626 36.8609 14.2638 36.4998L12.7791 36.1176L12 39.0306L13.4847 39.4128C13.7301 39.473 14.0491 39.6987 14.5736 40.4541C14.7755 40.7522 14.9698 41.0553 15.1564 41.3629L15.365 41.6939C15.6534 42.1513 15.9847 42.6569 16.3681 43.1504C17.1442 44.1435 18.2025 45.1456 19.773 45.6542C20.8466 46.0033 22.0675 46.0875 23.4601 45.8769V51.4953C23.4601 51.8944 23.6217 52.2771 23.9093 52.5593C24.197 52.8415 24.5871 53 24.9939 53H37.2638C37.6706 53 38.0607 52.8415 38.3483 52.5593C38.636 52.2771 38.7975 51.8944 38.7975 51.4953V40.773C38.7975 39.8251 38.7546 38.9554 38.4816 38.1459C40.5153 37.7246 42.5368 36.9722 44.2055 35.5579C46.5982 33.5235 48 30.3517 48 25.6511V25.6481C47.9923 23.3133 47.1597 21.0534 45.6442 19.2532C46.2331 17.1549 46.0607 14.921 45.1564 12.9336C45.0652 12.733 44.9304 12.5545 44.7613 12.4105C44.5923 12.2664 44.3931 12.1605 44.1779 12.1L43.7577 13.5445C44.1779 12.1 44.1748 12.1 44.1718 12.1L44.1656 12.097L44.1534 12.091L44.1258 12.085C44.05 12.0657 43.9732 12.0506 43.8957 12.0398C43.7351 12.0168 43.5733 12.0038 43.411 12.0007C42.885 11.9931 42.3599 12.0466 41.8466 12.1602C40.6472 12.413 38.9939 13.0119 36.8282 14.3149Z"
                                    fill="black" />
                            </svg>

                        </a>
                        <a href="https://wa.me/089612818788">
                            <svg width="40" height="40" class="hover:scale-110" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="30" fill="#0054F7" />
                                <path
                                    d="M30.0724 12C20.195 12 12.1447 20.01 12.1447 29.838C12.1447 32.988 12.9769 36.048 14.5327 38.748L12 48L21.4975 45.516C24.1206 46.938 27.0693 47.694 30.0724 47.694C39.9497 47.694 48 39.684 48 29.856C48 25.086 46.1367 20.604 42.7538 17.238C39.3709 13.854 34.8663 12 30.0724 12ZM30.0905 15.006C34.0704 15.006 37.797 16.554 40.6191 19.362C43.4231 22.17 44.9789 25.896 44.9789 29.856C44.9789 38.028 38.2854 44.67 30.0724 44.67C27.395 44.67 24.7719 43.968 22.4925 42.6L21.9497 42.294L16.3055 43.77L17.807 38.298L17.4452 37.722C15.9618 35.4 15.1658 32.646 15.1658 29.838C15.1839 21.666 21.8593 15.006 30.0905 15.006ZM23.7226 21.594C23.4332 21.594 22.9447 21.702 22.5286 22.152C22.1307 22.602 20.9548 23.7 20.9548 25.878C20.9548 28.074 22.5648 30.18 22.7638 30.486C23.0171 30.792 25.9477 35.292 30.4523 37.2C31.5196 37.686 32.3518 37.956 33.003 38.154C34.0703 38.496 35.0472 38.442 35.8251 38.334C36.6935 38.208 38.4663 37.254 38.8462 36.21C39.2261 35.166 39.2261 34.284 39.1176 34.086C38.991 33.906 38.7015 33.798 38.2492 33.6C37.797 33.348 35.5899 32.268 35.192 32.124C34.7759 31.98 34.5226 31.908 34.1789 32.34C33.8894 32.79 33.0211 33.798 32.7678 34.086C32.4965 34.392 32.2432 34.428 31.809 34.212C31.3387 33.978 29.8915 33.51 28.191 31.998C26.8523 30.81 25.9658 29.352 25.6945 28.902C25.4774 28.47 25.6764 28.2 25.8935 28.002C26.0925 27.804 26.3819 27.48 26.5628 27.21C26.798 26.958 26.8704 26.76 27.0151 26.472C27.1598 26.166 27.0874 25.914 26.9789 25.698C26.8703 25.5 25.9658 23.268 25.5859 22.386C25.2241 21.522 24.8623 21.63 24.5729 21.612C24.3196 21.612 24.0301 21.594 23.7226 21.594Z"
                                    fill="#0E0E0E" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full self-end px-4 mx-auto lg:w-1/3" data-aos="fade-left" data-aos-delay="300">
                    <div class="relative mt-10 lg:mt-0 lg:right-28">
                        <img src="images\profile.png" width="100%" height="100%" alt="Abid" class="max-w-full mt-4 mx-auto">
                        {{-- <span class="absolute -bottom-20 left-1/2 -z-10 -translate-x-1/2">
                            <svg width="400" height="400" viewBox="0 0 447 393" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="blur-xl">
                                <path
                                    d="M417.426 133.028C439.055 161.373 453.118 198.04 444.148 229.062C435.178 260.085 403.017 285.685 377.633 312.083C352.471 338.639 334.373 366.529 308.28 380.744C282.566 394.893 249.013 395.143 219.009 387.562C188.847 380.203 162.391 364.791 138.583 346.583C114.776 328.374 93.8386 307.528 66.9594 280.469C40.1449 253.788 7.29549 221.496 1.21277 185.813C-4.80525 150.509 15.8507 112.417 47.2049 91.251C78.9387 70.0206 121.056 66.1615 157.52 48.6172C194.206 31.2303 224.701 0.445 253.634 0.591383C282.788 0.895216 310.444 32.5103 338.712 58.5521C367.138 84.3717 395.954 104.461 417.426 133.028Z"
                                    fill="#0054F7" transform="scale(1)" />
                            </svg>
                        </span> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="about" class="relative pt-6">
        <div class="container mx-auto">
            <div class="flex flex-wrap lg:mx-40">
                <div class="w-full self-center px-5" data-aos="fade-right">
                    <h1 style="font-family: bangers" class="text-blue text-2xl lg:text-3xl">About me</h1>
                    <h1 class="text-white font-bold text-2xl lg:text-xl">Hey, Im Web Developer and UI/UX Design</h1>
                    <p class="text-white font-bold pt-5 text-xl">Personal Info's</p>
                    <ul class="text-white pt-4">
                        <li class="flex gap-2 px-1 py-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#D9D9D9" stroke="#0054F7"
                                    stroke-width="4" />
                            </svg>
                            <p>Nama : Muhammad Abid Murtadho </p>
                        </li>
                        <li class="flex gap-2 px-1 py-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#D9D9D9" stroke="#0054F7"
                                    stroke-width="4" />
                            </svg>
                            <p>Adress : Jl Dr Wahidin SH, Jawa Timur Gresik </p>
                        </li>
                        <li class="flex gap-2 px-1 py-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#D9D9D9" stroke="#0054F7"
                                    stroke-width="4" />
                            </svg>
                            <p>Age : My Age 21 years old </p>
                        </li>
                        <li class="flex gap-2 px-1 py-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#D9D9D9" stroke="#0054F7"
                                    stroke-width="4" />
                            </svg>
                            <p>language skills : Indonesian, English</p>
                        </li>
                        <li class="flex gap-2 px-1 py-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#D9D9D9" stroke="#0054F7"
                                    stroke-width="4" />
                            </svg>
                            <p>My Hope : Always Gratefull for god</p>
                        </li>
                        <li class="flex gap-2 px-1 py-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#D9D9D9" stroke="#0054F7"
                                    stroke-width="4" />
                            </svg>
                            <p>Hobby : Coding, Gamers, Playing Football</p>
                        </li>
                    </ul>
                    {{-- <div class="py-5">
                        <a href=""
                            class="text-base font-semibold border text-blue hover:bg-white bg-primary py-2 border-blue px-7 rounded-full mr-2">About Me</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Portofolio --}}
    <section class="pt-36 relative" id="portofolio">
        <div class="container mx-auto">
            <div class="flex flex-wrap lg:mx-40">
                <div class="w-full self-center px-5">
                    <h1 style="font-family: bangers" class="text-blue text-2xl lg:text-3xl" data-aos="fade-right">My Portofolio</h1>
                    <h1 class="text-white font-bold text-2xl lg:text-xl" data-aos="fade-right">My Project And Recent completed works</h1>

                    {{-- <div class="flex items-center justify-center py-9 md:py-8 flex-wrap">
                        <button type="button"
                            class="text-blue-700 hover:text-blue border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            All Categories</button>
                        <button type="button"
                            class="text-blue-700 hover:text-blue border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            Front-End</button>
                        <button type="button"
                            class="text-blue-700 hover:text-blue border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            Back-End</button>
                        <button type="button"
                            class="text-blue-700 hover:text-blue border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            Fullstack</button>
                        <button type="button"
                            class="text-blue-700 hover:text-blue border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            Design</button>
                    </div> --}}

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-10">
                        <button onclick="location.href='detail'" class="card-portofolio relative" data-aos="flip-right">
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/AmdevShop.png') }}" width="100%" height="100%" alt="AmdevShop">
                            <div
                                class="overlay absolute inset-0 bg-black bg-opacity-60 text-white flex justify-center items-center opacity-0">
                                <div class="text-center px-6">
                                    <p class="text-lg font-bold">AMDEV SHOP</p>
                                    <p class="md:text-xs">Sebuah Platform yang meneyediakan E-Voucer Game Mobile Legends, yang melatarbelakangi pembuatan website ini 
                                        kebetulan salah satu dari teman kami ada yang menjual E-Voucher Game dengan transaksi manual 
                                        maka kami ingin mebuatkan website dengan tujuan transaksi pembelian E-Voucher Game secara otomatis. </p>
                                    <a href="detail" class="text-white font-semibold hover:text-lg hover:underline">View
                                        Details</a>
                                </div>
                            </div>
                        </button>
                        <button onclick="location.href='detail2'" class="card-portofolio relative" data-aos="flip-right" data-aos-delay="150">
                            <img class="h-auto hover:scale-125 max-w-full rounded-lg" src="{{ asset('images/SambalIzzoku.png') }}"
                                alt="SambalIzzoku" width="100%" height="100%">
                            <div
                                class="overlay absolute inset-0 bg-black bg-opacity-70 text-white flex justify-center items-center opacity-0">
                                <div class="text-center px-6">
                                    <p class="text-lg font-bold">Website Sambal IZZOKU</p>
                                    <p class="md:text-xs">Sebuuah Website yang meneyediakan berbagai macam sambal dengan harga terjangkau dan kualitas terjamin</p>
                                    <a href="detail2" class="text-white font-semibold hover:text-lg hover:underline">View Details</a>
                                </div>
                            </div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const images = document.querySelectorAll(".card-portofolio");

                images.forEach((image) => {
                    const overlay = image.querySelector(".overlay");
                    const viewDetailsButton = image.querySelector(".view-details-button");

                    image.addEventListener("mouseenter", () => {
                        overlay.style.opacity = "1";
                    });

                    image.addEventListener("mouseleave", () => {
                        overlay.style.opacity = "0";
                    });
                });
            });
        </script>
    </section>

    <!-- ====== Contact Section Start -->
    <section id="contactme" class="relative z-10 overflow-hidden text-white py-20 lg:py-[120px] pt-36">
        <div class="container mx-auto">
            <div class="-mx-4 px-8 flex flex-wrap lg:mx-40 lg:justify-between">
                <div class="w-full px-4 lg:w-1/2 xl:w-6/12" data-aos="fade-right">
                    <div class="mb-12 max-w-[570px] lg:mb-0">
                        <h2 style="font-family: bangers"
                            class="mb-6 text-blue text-2xl uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                            GET IN TOUCH WITH US
                        </h2>
                        <p class="text-body-color mb-9 text-base leading-relaxed">
                            
                        </p>
                        <div class="mb-8 flex w-full max-w-[370px]">
                            <div
                                class="bg-white text-white mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                    <path
                                        d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-dark mb-1 text-xl font-bold">My Location</h4>
                                <p class="text-body-color text-base">
                                    Jl. Dr Wahidin SH Gang 14F No. 59
                                </p>
                            </div>
                        </div>
                        <div class="mb-8 flex w-full max-w-[370px]">
                            <div
                                class="bg-white text-white mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                <svg width="24" height="26" viewBox="0 0 24 26" class="fill-current">
                                    <path
                                        d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z" />
                                    <path
                                        d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z" />
                                    <path
                                        d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-dark mb-1 text-xl font-bold">My Phone Number</h4>
                                <p class="text-body-color text-base">(+62)896 128 187 88</p>
                            </div>
                        </div>
                        <div class="mb-8 flex w-full max-w-[370px]">
                            <div
                                class="bg-white text-white mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                                    <path
                                        d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="text-dark mb-1 text-xl font-bold">My Email Address</h4>
                                <p class="text-body-color text-base">mabidmurtadho@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12" data-aos="fade-left">
                    <div class="relative rounded-2xl bg-primary2 p-9 shadow-lg sm:p-12">
                        <form action="https://formsubmit.co/mabidmurtadho@gmail.com" method="POST">
                            <div class="mb-6">
                                <input type="text" name="name" required placeholder="Your Name"
                                    class="text-body-color border-[f0f0f0] text-black focus:border-primary w-full rounded-xl border py-3 px-[14px] text-base outline-none  focus-visible:shadow-none" />
                            </div>
                            <div class="mb-6">
                                <input type="email" name="email" required placeholder="Your Email"
                                    class="text-body-color border-[f0f0f0] text-black focus:border-primary w-full rounded-xl border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                            </div>
                            <div class="mb-6">
                                <input type="text" name="subject" required placeholder="Your Phone"
                                    class="text-body-color border-[f0f0f0] text-black focus:border-primary w-full rounded-xl border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                            </div>
                            <div class="mb-6">
                                <textarea rows="6" name="msg" required placeholder="Your Message"
                                    class="text-body-color border-[f0f0f0] text-black focus:border-primary w-full resize-none rounded-xl border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-blue border-primary w-full rounded-full border p-3 text- transition hover:bg-opacity-90">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Section End -->
@endsection
