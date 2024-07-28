@extends('template.template')
@section('main')
<h1>Upload File</h1>
<form action="{{route('upload.store')}}" enctype="multipart/form-data" class="d-flex align-items-center my-3" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlFile1">Input Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button type="submit" class="btn btn-sm btn-success ml-3">Submit</button>
</form>

 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img src="{{asset('storage/'.$item->image)}}" width="300"></td>

            <td class ="d-flex">
                <a href="{{route('upload.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('upload.destroy', $item->id) }}" method="POST">
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