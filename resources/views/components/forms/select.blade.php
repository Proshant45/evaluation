@props(['items', 'name'])
<div>
  <label for="{{$name}}" class="block text-sm font-medium leading-6 text-gray-900">{{$slot}}</label>
  <select id="{{$name}}" name="{{$name}}" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
   <option>Select</option>
    @if(isset($items))
    @foreach($items as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
    @endif
  </select>
</div>