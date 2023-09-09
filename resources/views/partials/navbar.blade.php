<nav class="bg-primary bg-opacity-90 border-gray-200  fixed top-0 left-0 right-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <span style="font-family: bangers" class="self-center text-xl text-white">MAM Project</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <ul class="hidden w-full md:flex md:w-auto font-medium flex-col p-4 md:p-0 mt-5 border bg-white lg:bg-primary md:bg-primary border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 " id="navbar-default">
            <li>
              <a href="/" style="font-family: inter" class="block py-2 pl-3 pr-4 md:text-white lg:text-white rounded hover:bg-blue hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Home</a>
            </li>
            <li>
              <a href="/#about" style="font-family: inter" class="block py-2 pl-3 pr-4 md:text-white lg:text-white rounded hover:bg-blue hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About Me</a>
            </li>
            <li>
              <a href="/#portofolio" style="font-family: inter" class="block py-2 pl-3 pr-4 md:text-white lg:text-white rounded hover:bg-blue hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Portofolio</a>
            </li>
            <li>
              <a href="/#contactme" style="font-family: inter" class="block py-2 pl-3 pr-4 md:text-white lg:text-white rounded hover:bg-blue hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contact Me</a>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toggleButton = document.querySelector("[data-collapse-toggle]");
        var menuElement = document.getElementById("navbar-default");

        toggleButton.addEventListener("click", function() {
            menuElement.classList.toggle("hidden");
        });
    });
</script>
