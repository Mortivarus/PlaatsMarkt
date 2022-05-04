<!DOCTYPE html>
<html lang="en">

<x-header/>
    
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

<x-nav-bar />

    <x-section>

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
				        Adverts
			        </a>
                    <div class="flex items-center" id="store-nav-content">

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <x-icons.order/>
                        </a>

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <x-icons.search/>
                        </a>

                    </div>
              </div>
            </nav>

            <x-index.advert
            name="Coffee Maker"
            amount=0.99
            image="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
            />

            <x-index.advert
            name="Coffee Maker"
            amount=0.99
            image="https://images.unsplash.com/photo-1449247709967-d4461a6a6103?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
            />

            <x-index.advert
            name="Coffee Maker"
            amount=0.99
            image="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
            />

            <x-index.advert
            name="Coffee Maker"
            amount=0.99
            image="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80"
            />

        </div>
    </x-section>


    <x-about/>

    <x-footer/>    

</body>

</html>
