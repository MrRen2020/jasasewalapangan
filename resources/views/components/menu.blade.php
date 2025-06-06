<!-- File: resources/views/components/menu.blade.php -->
<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MyApp</span>
    </a>
    <button data-collapse-toggle="mega-menu-full" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="mega-menu-full" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div id="mega-menu-full" class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
      <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">Home</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">Services</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">About</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
