<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

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
    @tailwind utilities; 

    @layer base {
      html {
        font-family: 'Montserrat', sans-serif;
      }
    }
  </style>
</head>

<body>
  <main class="relative overflow-hidden bg-no-repeat bg-cover" style="
  background-position: 50%;
  background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
  height: 100vh;
">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-black bg-opacity-75 overflow-hidden bg-fixed">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">{{ env('APP_NAME') }}</h1>
          <h3 class="text-md mb-8">{{ env('APP_DESCRIPTION') }}</h3>
          <div class="w-full flex gap-5 justify-center">
            @if ($isAuthenticated)
            <a href="{{ route('dashboard.index') }}" class="button-primary">Dashboard</a>
            @else
            <a href="{{ route('login.index') }}" class="button-primary">Login</a>
            <span class="inline-block w-px h-8 bg-white"></span>
            <a href="{{ route('register.index') }}" class="button-secondary">Register</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>