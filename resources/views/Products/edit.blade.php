@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header">
      <h3 class="card-title">New Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('products.update',$product->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" value="{{$product->name}}" required>
        </div>

        <div class="form-group">
            <label for="units">Units</label>
            <input type="text" class="form-control" id="units" name="unit" placeholder="Enter Units" value="{{$product->unit}}" required>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-success">Submit</button>
      </div>
    </form>
  </div>
  @endsection