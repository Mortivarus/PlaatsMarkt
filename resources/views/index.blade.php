<x-header/>
    
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

<x-nav-bar />

<x-section>
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <div id="store" class="w-full px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                    Adverts
                </a>
                <div class="flex items-center" id="store-nav-content">

                    <a class="pl-3 inline-block no-underline" href="#">
                        <x-icons.order/>
                    </a>

                    <a class="pl-3 inline-block no-underline" href="#">
                        <x-icons.search/>
                    </a>

                </div>
            </div>
        </div>

        @foreach ($adverts as $advert)

            <x-index.advert 
            :name="$advert->title"
            :amount="$advert->amount"
            image="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
            />
        @endforeach

    </div>
</x-section>

<x-about/>

<x-footer/>    

