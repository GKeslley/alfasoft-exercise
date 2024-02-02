<header class="shadow mb-5">
  <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
      <a href="/" class="text-black text-3xl font-semibold">ALFASOFT</a>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
        <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter mr-4" wire:navigate>
          Home
        </a>
        <a href="/contact/create" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter  mr-4" wire:navigate>
          New Contact
        </a>
      </div>
      <div>
        @if ($user)
        <div>
          <x-button type="button" text="Logout" wire:confirm="Are you sure you want to logout?" wire:click="logout" />
          <p class="inline-block text-sm px-4 py-2 leading-none border rounded border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0 text-black" wire:navigate>{{$user}}</p>
        </div>
        @else
        <div>
          <a href="/login" class="inline-block text-sm px-4 py-2 leading-none border rounded border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0 text-black" wire:navigate>Log In</a>
          <a href="/register" class="inline-block text-sm px-4 py-2 leading-none border rounded border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0 text-black" wire:navigate>Register</a>
        </div>
        @endif
      </div>
    </div>
  </nav>
</header>