@extends('layouts.inside')

@section('title', 'Edit User')

@section('content')
<div class="container px-2 mx-auto">
  <nav class="bg-gray-100 px-5 py-3 rounded-md w-full mb-3">
    <ol class="list-reset flex">
      <li><a href="{{ route('dashboard.index') }}" class="text-blue-600 hover:text-blue-700">Dashboard</a></li>
      <li><span class="text-gray-500 mx-2">/</span></li>
      <li class="text-gray-500"><a href="{{ route('users.index') }}" class="text-blue-600 hover:text-blue-700">User</a>
      </li>
      <li><span class="text-gray-500 mx-2">/</span></li>
      <li class="text-gray-500">Edit</li>
    </ol>
  </nav>

  @include('_partials.messages')
  <div class="flex justify-center w-full">
    <div class="block p-6 rounded-lg shadow-lg bg-white w-full flex justify-between items-center">
      <form action="{{ route('users.store') }}" method="post"
        class="py-2 inline-block min-w-full sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-5">
        @csrf
        <div class=""><input type="text" class="form-input text-left" id="name" placeholder="Nama" name="name"
            value="{{ $user->name }}" />
        </div>
        <div class=""><input type="email" class="form-input text-left" id="email" placeholder="Email" name="email"
            value="{{ $user->email }}" />
        </div>
        <div class="">
          <input type="text" class="form-input text-left" id="username" placeholder="Username" name="username"
            value="{{ $user->username }}" />
        </div>
        <div class="col-span-2 flex justify-between">
          <div>
            <button class="button-primary" type="submit">
              Ubah
            </button>
            <a href="#" class="button-secondary" onclick="window.history.back()">
              Kembali
            </a>
          </div>
          <a href="{{ route('users.editpassword', $user->id) }}" class="button-dark">Edit Password</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection