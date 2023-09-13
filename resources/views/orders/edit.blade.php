@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header">
      <h3 class="card-title">Edit Order</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('orders.update',$order->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$order->name}}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" value="{{$order->quantity}}" required>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-success">Submit</button>
      </div>
    </form>
  </div>
  @endsection