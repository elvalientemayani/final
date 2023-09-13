@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">
            <h1 class="card-title">Orders</h1>
          </div>
          <div class="col-2">
            <a href="{{route('orders.create')}}" class="btn btn-block btn-success">NEW ORDER</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="orders-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Action</th>
                 
                  </tr>
                  </thead>
                  @foreach ($order as $orders)
                  <tbody>
                    <tr>
                      <td>{{$orders->name}}</td>
                      <td>{{$orders->quantity}}</td>
                      <td>
                        <div class="row">
                          <div class="col-3">
                            <button class="btn btn-info"> <a href="{{route('orders.edit',$orders->id)}}">EDIT</a> </button>
                          </div>
                          <div class="col-3">
                            
                              <form action="{{route('orders.destroy',$orders->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">DELETE</button>

                              </form>
                              
                          </div>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                  
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 @endsection
 

