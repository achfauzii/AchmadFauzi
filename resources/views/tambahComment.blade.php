@extends('template.template')
@section('main')
<h1>Form Tambah Data Comment</h1>
<form action="{{route('comment.store')}}" method="post">
    @csrf
  
    <div class="form-group">
        <label for="exampleInputEmail1">Comment</label>
        <input type="text" class="form-control @error('comment') is-invalid @enderror" id="exampleInputEmail1" name="comment" value="{{old('comment')}}">
     
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection