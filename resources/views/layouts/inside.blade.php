<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | {{ env('APP_NAME') }}</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  <style type="text/tailwindcss">
    @tailwind base;
    @tailwind components;
    .button-primary {
      @apply inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-secondary {
      @apply inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-success {
      @apply inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-danger {
      @apply inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-warning {
      @apply inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-light {
      @apply inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-dark {
      @apply inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-primary {
      @apply inline-block px-6 py-2.5 bg-transparent border border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:text-white hover:shadow-lg focus:bg-blue-600 focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-secondary {
      @apply inline-block px-6 py-2.5 bg-transparent border border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-600 hover:text-white hover:shadow-lg focus:bg-purple-600 focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-success {
      @apply inline-block px-6 py-2.5 bg-transparent border border-green-500 text-green-500 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-500 hover:text-white hover:shadow-lg focus:bg-green-500 focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-danger {
      @apply inline-block px-6 py-2.5 bg-transparent border border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-600 hover:text-white hover:shadow-lg focus:bg-red-600 focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-warning {
      @apply inline-block px-6 py-2.5 bg-transparent border border-yellow-500 text-yellow-500 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-yellow-500 hover:text-white hover:shadow-lg focus:bg-yellow-500 focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-light {
      @apply inline-block px-6 py-2.5 bg-transparent border border-gray-200 text-gray-200 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-200 hover:text-gray-700 hover:shadow-lg focus:bg-gray-200 focus:text-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out;
    }
    .button-outlined-dark {
      @apply inline-block px-6 py-2.5 bg-transparent border border-gray-800 text-gray-800 font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-800 hover:text-white hover:shadow-lg focus:bg-gray-800 focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out;
    }
    .form-input {
      @apply rounded-full block w-full px-4 py-2 mt-1 text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-md shadow-sm focus:border-blue-600 focus:ring focus:ring-blue-600 focus:ring-opacity-50;
    }
    @tailwind utilities; 

    @layer base {
      html {
        font-family: 'Montserrat', sans-serif;
      }
    }
  </style>
</head>

<body>
  <header class="py-4 px-6 bg-white z-10 border-b-2 border-black">
    <button id="sidebar-toggle">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
  </header>
  <section class="min-h-screen flex relative">
    <div id="overlay" class="fixed z-9 inset-0 bg-black opacity-50 transition-opacity hidden"></div>
    @include('_partials.sidebar')
    <div class="flex flex-col w-full h-full pt-3">
      @yield('content')
    </div>
  </section>
</body>

@stack('scripts')
<script>
  const sidebarToggle = document.querySelector('#sidebar-toggle');
const sidebar = document.querySelector('#sidebar');
const overlay = document.querySelector('#overlay');

sidebarToggle.addEventListener('click', function() {
  sidebar.classList.toggle('-translate-x-full');
  sidebar.classList.toggle('translate-x-0');

  overlay.classList.toggle('hidden');
  overlay.classList.toggle('block');
});
overlay.addEventListener('click', function() {
  sidebar.classList.toggle('-translate-x-full');
  sidebar.classList.toggle('translate-x-0');

  overlay.classList.toggle('hidden');
  overlay.classList.toggle('block');
});
</script>

</html>