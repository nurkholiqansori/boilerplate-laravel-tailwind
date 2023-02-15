@extends('layouts.inside')

@section('title', 'User')

@section('content')
<div class="container px-2 mx-auto">
  <nav class="bg-gray-100 px-5 py-3 rounded-md w-full mb-3">
    <ol class="list-reset flex">
      <li><a href="{{ route('dashboard.index') }}" class="text-blue-600 hover:text-blue-700">Dashboard</a></li>
      <li><span class="text-gray-500 mx-2">/</span></li>
      <li class="text-gray-500">Users</li>
    </ol>
  </nav>

  @include('_partials.messages')

  <div class="flex justify-center w-full">
    <div class="block p-6 rounded-lg shadow-lg bg-white w-full flex justify-between items-center">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-auto pb-5">
          <a href="{{ route('users.create') }}" class="button-primary mb-3">Tambah User</a>
          <table class="min-w-full">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                  No.
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Nama
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Username
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Email
                </th>
                {{-- <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Role
                </th> --}}
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left" style="width:100px">
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach ($users as $user)
              <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $no++ }}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $user->name }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $user->username }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $user->email }}
                </td>
                {{-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $user->role }}
                </td> --}}
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex flex-col gap-2">
                  <a href="{{ route('users.edit', $user->id) }}" class="button-primary">Edit</a>
                  <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                    onsubmit="return confirm('Anda yakin ingin menghapus user ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-danger">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection