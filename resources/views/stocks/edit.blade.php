@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header">
      <h3 class="card-title">Edit Stock</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('stocks.update',$stock->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$stock->name}}" placeholder="Enter Name" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{$stock->quantity}}" placeholder="Enter type" required>
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-success">Submit</button>
      </div>
    </form>
  </div>
  @endsection