@extends('template.template')
@section('main')
<h1>Data Siswa</h1>
<a href="{{route('siswa.create')}}" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nis</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $siswa )
        <tr>
            <th scope="row">1</th>
            <td>{{$siswa -> nis}}</td>
            <td>{{$siswa -> nama}}</td>
            <td>{{$siswa -> alamat}}</td>
            <td class ="d-flex">
                <a href="{{route('siswa.edit',$siswa->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
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