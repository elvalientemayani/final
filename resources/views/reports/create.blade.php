@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header bg-orange">
      <h3 class="card-title">New Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('reports.store')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter type">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Supplier</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Supplier">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Date">
          </div>
       
        
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-orange">Submit</button>
      </div>
    </form>
  </div>
  @endsection