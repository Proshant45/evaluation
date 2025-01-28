<x-layout>
    <section class="px-6 py-8">
        <div class="container mx-auto flex justify-between">
            <div>
                <x-forms.form-heading> Add Category </x-forms.form-heading>
                <x-forms.form action="/category" method="POST">
                    <x-forms.input name="name" >Product Name</x-forms.input>
                    <x-forms.button>Add Category</x-forms.button>
                </x-forms.form>
            </div>
            <div>
                <h3 class="text-2xl text-white font-bold"> All Categories </h3>
                    <div class="text-white flex flex-col space-y-5">
                            @foreach ($categories as $category)
                            <li class="text-white"> 
                                {{$category->name}} 
                                <a href="/category/{{$category->id}}/delete" class="text-red-500">Delete</a> |
                                <a href="/category/{{$category->id}}" class="text-blue-500">Edit</a>
                            </li>
                           @endforeach
                    </div>
                
            </div>
        </div>
    
    
</x-layout>