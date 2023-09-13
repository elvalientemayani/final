@extends('layouts.admin')
@section('contents')
<div class="card ">
    <div class="card-header bg-orange">
      <h3 class="card-title">Edit Customer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('customers.edit')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Customer Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$customers->name}}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"  value="{{$customers->email}}">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn bg-orange">Submit</button>
      </div>
    </form>
  </div>
  @endsection