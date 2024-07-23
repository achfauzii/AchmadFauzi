@extends('template')
@section('main')
<h1 class="h3 mb-0 text-gray-800">Programming Languages</h1>
<ul>
    @foreach ($programs as $program)
        <li>{{ $program }}</li>
    @endforeach
</ul>

@endsection
  