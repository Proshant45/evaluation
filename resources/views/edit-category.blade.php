<x-layout>
    <x-forms.form-heading> Edit Category </x-forms.form-heading>
   
    <x-forms.form action="/category/{{$category->id}}/edit" method="POST">
        <input type="hidden" name="id" value="{{$category->id}}">
        <x-forms.input name="name" value="{{$category->name}}" placeholder="{{$category->name}}" >Category Name</x-forms.input>
        <x-forms.button >Edit Category</x-forms.button>
    </x-forms.form>
    
</x-layout>