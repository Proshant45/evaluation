<x-layout>
    <section class="px-6 py-8">
        <div class="container mx-auto flex justify-between">
            <div>
                <x-forms.form-heading> Add Product </x-forms.form-heading>
                <x-forms.form action="/product" method="POST">
                    <x-forms.input name="name" >Product Name</x-forms.input>
                    <x-forms.input name="price" >Price</x-forms.input>
                    <x-forms.input name="description">Description</x-forms.input>
                    
                    <x-forms.select name="category_id" :items="$categories">Category</x-forms.select>
                    <x-forms.button >Add Product</x-forms.button>
    
                </x-forms.form>
            </div>
            <div>
                <h3 class="text-2xl text-white font-bold"> Products </h3>
                <div>        
                        @if($products)
                        @foreach ($products as $product)
                            <li class="text-white py-5"> {{$product->name}} - {{$product->price}} --{{$product->description}}
                                --{{$product->category->name}}
                                <a href="/product/{{$product->slug}}/delete" class="text-red-500 px-5">Delete</a> |
                                <a href="/product/{{$product->slug}}/edit" class="text-blue-500 px-5">Edit</a>
                            </li>
                        @endforeach
                        @endif
                </div>
                
            </div>
        </div>
    
    
</x-layout>