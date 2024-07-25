@extends('template.template')
@section('main')
<h1>Form Update</h1>
<form action="{{route('comment.update', $data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Comment</label>
      <input type="text" class="form-control @error('comment') is-invalid @enderror " id="exampleInputEmail1" name="comment" value="{{$data->comment}}">

    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection