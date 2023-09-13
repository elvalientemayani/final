@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header">
      <h3 class="card-title">New Supplier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('suppliers.edit')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Supplier Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$supplier->name}}" placeholder="Enter Name" required>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-success">Submit</button>
      </div>
    </form>
  </div>
  @endsection