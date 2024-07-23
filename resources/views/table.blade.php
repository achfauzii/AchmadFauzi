@extends('template')
@section('main')
<h1 class="h3 mb-0 text-gray-800">Halaman Table</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$item}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection