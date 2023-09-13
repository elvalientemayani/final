@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header">
      <h3 class="card-title">Edit Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('categorieses.update',$categories->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$categories->name}}" required>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-success">Submit</button>
      </div>
    </form>
  </div>
  @endsection