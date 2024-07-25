@extends('template.template')
@section('main')
<h1>Data Posts</h1>
<a href="{{route('posts.create')}}" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$item-> title}}</td>
            <td>{{$item -> body}}</td>
            <td class ="d-flex">
                <a href="{{route('posts.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
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