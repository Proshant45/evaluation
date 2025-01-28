@props(['product'])

<div class="flex text-white flex-col text-center p-4 bg-white/50  rounded-xl border border-transparent hover:border-blue-500 group transition-colors duration-100">
            <div class="py-8 text-center">
                <h3 class="group-hover:text-blue-600 text-2xl font-bold transition-colors duration-300">
                    <a href="/product/{{$product->slug}}" target="_blank">
                    {{$product->name}}</a> </h3>
                <p class="mt-4"> Price: {{$product->price}} Taka </p>
            </div>
            <div class="flex justify-between items-center">
                <div >
                {{$product->category->name}}
                </div>
            </div>
</div>