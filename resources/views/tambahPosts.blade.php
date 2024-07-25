@extends('template.template')
@section('main')
<h1>Form Tambah Data Posts</h1>
<form action="{{route('posts.store')}}" method="post">
    @csrf
  
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" name="title" value="{{old('title')}}">
     
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Body</label>
        <textarea type="text" class="form-control @error('body') is-invalid @enderror" id="exampleInputEmail1" name="body" value="{{old('body')}}"></textarea>
     
    </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection