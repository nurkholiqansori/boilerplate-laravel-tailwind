@extends('layouts.inside')

@section('title', 'Tambah User')

@section('content')
<div class="container px-2 mx-auto">
  <nav class="bg-gray-100 px-5 py-3 rounded-md w-full mb-3">
    <ol class="list-reset flex">
      <li><a href="{{ route('dashboard.index') }}" class="text-blue-600 hover:text-blue-700">Dashboard</a></li>
      <li><span class="text-gray-500 mx-2">/</span></li>
      <li class="text-gray-500"><a href="{{ route('users.index') }}" class="text-blue-600 hover:text-blue-700">User</a>
      </li>
      <li><span class="text-gray-500 mx-2">/</span></li>
      <li class="text-gray-500">Tambah</li>
    </ol>
  </nav>

  @include('_partials.messages')
  <div class="flex justify-center w-full">
    <div class="block p-6 rounded-lg shadow-lg bg-white w-full flex justify-between items-center">
      <form action="{{ route('users.store') }}" method="post"
        class="py-2 inline-block min-w-full sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-5">
        @csrf
        <div class=""><input type="text" class="form-input text-left" id="name" placeholder="Nama" name="name" />
        </div>
        <div class=""><input type="email" class="form-input text-left" id="email" placeholder="Email" name="email" />
        </div>
        <div class="">
          <input type="text" class="form-input text-left" id="username" placeholder="Username" name="username" />
        </div>
        <div class="flex">
          <input type="password" class="form-input text-left" id="formPassword" placeholder="Password"
            name="password" />
          <button type="button" id="togglePassword" class="px-2 ">
            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </button>
        </div>
        <div class="">
          <input type="password" class="form-input text-left" id="password_confirmation"
            placeholder="Konfirmasi Password" name="password_confirmation" />
        </div>
        <div class="col-span-2">
          <button class="button-primary" type="submit">
            Daftar
          </button>
          <a href="#" class="button-secondary" onclick="window.history.back()">
            Kembali
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  var togglePassword = document.querySelector('#togglePassword');
  var password = document.querySelector('#formPassword');
  
  togglePassword.addEventListener('click', function (e) {
      // Ubah tipe input password menjadi text atau sebaliknya
      var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      
      var svg = this.querySelector('svg');
        if (type === 'password') {
            svg.setAttribute('viewBox', '0 0 24 24');
            svg.setAttribute('fill', 'none');
            svg.setAttribute('stroke-width', '1.5');
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />';
        } else {
          svg.setAttribute('viewBox', '0 0 24 24');
            svg.setAttribute('fill', 'none');
            svg.setAttribute('stroke-width', '1.5');
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />';
        }
  });
</script>
@endpush