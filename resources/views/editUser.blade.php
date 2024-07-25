@extends('template.template')
@section('main')
<h1>Form Update</h1>
<form action="{{route('user.update', $data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror " id="exampleInputEmail1" name="name" value="{{$data->name}}">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{$data->email}}">
     
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" name="password" value="{{$data->password}}">

    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection