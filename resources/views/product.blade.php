<x-layout>
    <section class="px-6 py-8">
        <div class="container mx-auto flex justify-between px-10">
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
    <h3 class="text-2xl text-white font-bold my-10"> Products </h3>

    <div>

        @if($products)
            <table class="min-w-full bg-gray-800 text-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-700">Name</th>
                        <th class="py-2 px-4 border-b border-gray-700">Price</th>
                        <th class="py-2 px-4 border-b border-gray-700">Description</th>
                        <th class="py-2 px-4 border-b border-gray-700">Category</th>
                        <th class="py-2 px-4 border-b border-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-700">{{$product->name}}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{$product->price}}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{$product->description}}</td>
                            <td class="py-2 px-4 border-b border-gray-700">{{$product->category->name}}</td>
                            <td class="py-2 px-4 border-b border-gray-700">
                                <a href="/product/{{$product->slug}}/delete" class="text-red-500 px-2">Delete</a> |
                                <a href="/product/{{$product->slug}}/edit" class="text-blue-500 px-2">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
        </div>
    </section>

</x-layout>
