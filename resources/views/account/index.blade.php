@extends('layouts.inside')

@section('title', 'Pengaturan Akun')

@section('content')
<div class="container px-2 mx-auto">
  <nav class="bg-gray-100 px-5 py-3 rounded-md w-full mb-3">
    <ol class="list-reset flex">
      <li><a href="{{ route('dashboard.index') }}" class="text-blue-600 hover:text-blue-700">Dashboard</a></li>
      <li><span class="text-gray-500 mx-2">/</span></li>
      <li class="text-gray-500">Pengaturan Akun</li>
    </ol>
  </nav>

  @include('_partials.messages')
</div>
@endsection