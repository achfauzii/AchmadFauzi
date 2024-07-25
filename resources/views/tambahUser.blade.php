@extends('template.template')
@section('main')
<h1>Form Tambah Data User</h1>
<form action="{{route('user.store')}}" method="post">
    @csrf
  
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" value="{{old('name')}}">
     
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{old('email')}}">
     
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="text" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" name="password" value="{{old('password')}}">

    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection