@extends('layouts.admin')
@section('contents')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Make Sale</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('sales.store')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Product Name</label>
          <br><br>
          <select name="name" id="name">
            @foreach ($product as $products)
            <option value="{{$products->name}}">{{$products->name}}</option>  
            @endforeach
          </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-success">Submit</button>
      </div>
    </form>
  </div>
  @endsection