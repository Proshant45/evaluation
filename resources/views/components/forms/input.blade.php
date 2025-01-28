@props(['name','type'=>'text','placeholder'=>'','value'=>''])

<div>
        <label for="{{$name}}" class="block text-sm font-medium leading-6 text-white">{{$slot}}</label>
            <div class="mt-2">
                <input id="{{$name}}" name="{{$name}}" type="{{$type}}" required class="block w-full rounded-md border-0 bg-white py-1.5 text-black shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="{{$placeholder}} " value="{{$value}}">
            </div>
      </div>