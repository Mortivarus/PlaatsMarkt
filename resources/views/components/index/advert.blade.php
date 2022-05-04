@props(['image', 'name', 'amount'])

<div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
    <a href="#">
        <img class="hover:grow hover:shadow-lg" src="{{$image}}">
        <div class="pt-3 flex items-center justify-between">
            <p class="">{{$name}}</p>
            <x-icons.favourite/>
        </div>
        <p class="pt-1 text-gray-900">€{{$amount}}</p>
    </a>
</div>