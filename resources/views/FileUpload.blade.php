@extends('layout.aplikasi')
@section('isi')

<div class="container mt-3">
<form action ="{{url('/upload/save')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
      <label for="exampleInputFile" class="form-label">File Upload</label>
      <input type="file" class="form-control" name="file_upload" id="exampleInputFile">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>