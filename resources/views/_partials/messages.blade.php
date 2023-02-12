@if(isset ($errors) && count($errors) > 0)
<div class="bg-yellow-100 text-yellow-900 py-2 px-4 rounded-md my-5" role="alert">
  <ul class="list-none pl-4 mb-0">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if(Session::get('success', false))
<?php $data = Session::get('success'); ?>
@if (is_array($data))
@foreach ($data as $msg)
<div class="bg-yellow-100 text-yellow-900 flex items-center rounded-md px-5 py-3 gap-5 my-5" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
  </svg>
  {{ $msg }}
</div>
@endforeach
@else
<div class="bg-yellow-100 text-yellow-900 flex items-center rounded-md px-5 py-3 gap-5 my-5" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
  </svg>
  {{ $data }}
</div>
@endif
@endif