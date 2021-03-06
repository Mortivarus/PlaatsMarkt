<!--Nav-->
<nav id="header" class="sticky bg-white w-full z-30 top-0 py-2">
    <div class="w-full container justify-items-start mx-auto flex flex-wrap items-center mt-0 px-6 py-3">

        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="/">Shop</a></li>
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="/register">Register</a></li>
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="/login">Login</a></li>
                </ul>
            </nav>
        </div>

        <div class="">
            <a class="justify-self-center flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl" href="/">
                <x-icons.bag/>
                PlaatsMarkt
            </a>
        </div>

        {{-- <div class="order-2 md:order-3 flex items-center" id="nav-content">

            <a class="inline-block no-underline hover:text-black" href="/register">
                <x-icons.person/>
            </a>

            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                <x-icons.cart/>
            </a>

        </div> --}}
    </div>
</nav>