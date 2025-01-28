<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-3">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              @guest
              <a href="/" class="{{ request()->is("/") ? "bg-gray-900 text-white" :"text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium ">Home</a>

              @endguest
              @auth
              <a href="/dashboard" class="{{ request()->is("dashboard") ? "bg-gray-900 text-white" :"text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium ">Dashboard</a>
              <a href="/category" class="{{ request()->is("category") ? "bg-gray-900 text-white" :"text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium ">Category</a>
              <a href="/product" class="{{ request()->is("product") ? "bg-gray-900 text-white" :"text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium ">Products</a>
              @endauth
            </div>
        </div>


      </div>
            @auth
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Logout</button>
            </form>
            @endauth
            @guest
            <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
            @endguest
      </div>
    </div>

  </div>
</nav>
