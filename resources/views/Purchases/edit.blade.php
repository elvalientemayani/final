@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header bg-orange">
      <h3 class="card-title">Make Purchase</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('purchases.update',$purchase->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" value="{{$product->name}}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" value="{{$product -> quantity}}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{$product->price}}" required>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-orange">Submit</button>
      </div>
    </form>
  </div>
  @endsection