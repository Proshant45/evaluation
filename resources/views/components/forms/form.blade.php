@props(['action'=>'/register','method'=>'POST'])
<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{$action}}" method="{{$method}}">
        @csrf
    {{$slot}}
    </form>

    <p class="mt-10 text-center text-sm text-gray-400">
      Not Registered?
      <a href="/register" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Create an Account</a>
    </p>
  </div>