<x-layout>
    <x-section>
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <p class="font-bold text-gray-800 text-xl pb-4">{{$advert->title}}</p>
            <p class="whitespace-pre">
                Prijs: {{$advert->amount}}
                Beschrijving: {{$advert->description}}
                Categorien: @foreach($advert->categories as $category){{$category->name}}@endforeach
            </p>


        </div>
    </x-section>
</x-layout>













