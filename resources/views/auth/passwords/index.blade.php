@extends('layouts.outside')
@section('title', 'Lupa Password')

@section('content')
<div class="md:p-12 md:mx-6  md:justify-center min-h-full md:flex md:flex-col p-10">
  <div class="text-center">
    {{-- <img class="mx-auto w-48"
      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" alt="logo" /> --}}
    <h1 class="text-3xl font-bold">{{ env('APP_NAME') }}</h1>
    <h4 class="text-xl font-semibold mt-1 mb-5 pb-1">Lupa Password</h4>
  </div>
  @include('_partials.messages')
  <form method="post" action="{{ route('password.reset.perform') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <input class="form-input" id="formEmail" type="email" placeholder="Email" name="email" />
    </div>
    <div class="mb-4 flex gap-5">
      <button type="submit" class="button-primary">
        Kirim
      </button>
      <button type="button" class="button-secondary" onclick="window.location.href='{{ route('login.index') }}'">
        Batal
      </button>
    </div>
  </form>
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