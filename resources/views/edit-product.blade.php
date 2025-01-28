<x-layout>
    <section class="px-6 py-8">
    <x-forms.form-heading> Edit Product </x-forms.form-heading>
    <x-forms.form action="/product/{{$product->slug}}/edit" method="POST">
        <input type="hidden" name="id" value="{{$product->id}}">
        <x-forms.input name="name" value="{{$product->name}}" placeholder="{{$product->name}}" >Product Name</x-forms.input>
        <x-forms.input name="price" value="{{$product->price}}" placeholder="{{$product->price}}">Price</x-forms.input>
        <x-forms.input name="description" value="{{$product->description}}" placeholder="{{$product->description}}" >Description</x-forms.input>
        <x-forms.select name="category_id" :items="$categories">Category</x-forms.select>
        <x-forms.button >Edit Product</x-forms.button>
    </x-forms.form>
    </section>
</x-layout>
