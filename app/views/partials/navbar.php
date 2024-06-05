<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">HOME</a>
            <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium">ABOUT</a>
            <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium">NOTES</a>
            <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium">CONTACT</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>