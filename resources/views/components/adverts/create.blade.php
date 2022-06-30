<x-layout>
    <x-section>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <form action="/adverts/create" method="post" enctype="multipart/form-data">
                @csrf
    
                <div>
                    <x-form.input name="title" label="title" required/>
                </div>
                
                <div>
                    <x-form.field name="description" label="description"/>
                </div>
    
                <div>
                    <x-form.input name="amount" label="amount" />
                </div>
            </form>
        </div>

    </x-section>
</x-layout>