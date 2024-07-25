@extends('template.template')
@section('main')
<h1>Data User</h1>
<a href="{{route('user.create')}}" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$item-> name}}</td>
            <td>{{$item -> email}}</td>
            <td>{{$item -> password}}</td>
            <td class ="d-flex">
                <a href="{{route('user.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
     
     
    </tbody>
  </table>
@endsection