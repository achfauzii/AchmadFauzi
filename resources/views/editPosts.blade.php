@extends('template.template')
@section('main')
<h1>Form Update</h1>
<form action="{{route('posts.update', $data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror " id="exampleInputEmail1" name="title" value="{{$data->title}}">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Body</label>
        <textarea type="text" class="form-control @error('body') is-invalid @enderror" id="exampleInputEmail1" name="body" value="{{$data->body}}">{{$data->body}}</textarea>
     
      </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection