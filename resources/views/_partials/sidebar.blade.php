<aside
  class="fixed z-11 inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full transition duration-300 ease-in-out overflow-y-auto border-r-2 border-black"
  id="sidebar">
  <div class="flex flex-col gap-2 p-5">
    <a href="{{ route('dashboard.index') }}"
      class="flex items-center gap-2 px-5 py-3 text-white bg-gray-700 rounded hover:bg-gray-900 transition duration-500 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
      </svg>
      <span>Home</span>
    </a>
    <span class="px-1 mt-2 font-semibold">Akun</span>
    {{-- logout --}}
    <a href="{{ route('logout.perform') }}"
      class="flex items-center gap-2 px-5 py-3 text-white bg-gray-700 rounded hover:bg-gray-900 transition duration-500 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
      </svg>

      <span>Logout</span>
    </a>
  </div>
</aside>