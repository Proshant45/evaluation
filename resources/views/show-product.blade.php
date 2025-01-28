<x-layout>
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-8 mt-10 mb-10 py-10 bg-slate-400">
            <div>
                <h1 class="text-5xl mt-5 mx-5"> Product Image</h1>
            </div>
            <div>
                <h1 class="text-4xl font-bold text-gray-800 mt-5">{{$product->name}}</h1>
                <p class="text-white mt-4">{{$product->description}}</p>
                <p class="text-gray-800 mt-4">${{$product->price}}</p>
                <form action="/product/{{$product->slug}}/add-to-cart" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
