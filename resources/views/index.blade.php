
<x-layout>

    <x-forms.form-heading> Products </x-form.forms-heading>
    <div>
       
        @foreach($catprod as $catName=>$products)
        <h2 class="text-white">{{$catName}}</h2>
        <div class="grid lg:grid-cols-3 gap-8 mt-10 mb-10">
            
            @foreach($products as $product)
            <x-product-card :product="$product" />
            @endforeach
        </div>
        @endforeach
    </div>
</x-layout>