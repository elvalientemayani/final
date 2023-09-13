@extends('layouts.admin')

@section('contents')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-9">
            <h1 class="card-title">Sales</h1>
            
          </div>
          <div class="col-3">
            <a href="{{route('sales.create')}}" class="btn btn-block btn-success">MAKE SALE</a>
            
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sales</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="sales-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Time</th>
                    
                  </tr>
                  </thead>
                  @foreach ($sale as $sales)
                  <tbody>
                    <tr>
                      <td>{{$sales->name}}</td>
                      <td>{{$sales->quantity}}</td>
                      <td>{{$sales->price}}</td>
                      <td>{{$sales->created_at}}</td>
                      <td>
                        <td>
                          <div class="row">
                            <div class="col-3">
                              <button class="btn btn-info"> <a href="{{route('sales.edit',$sales->id)}}">EDIT</a> </button>
                            </div>
                            <div class="col-3">
                              
                                <form action="{{route('sales.destroy',$sales->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">DELETE</button>
  
                                </form>
                                
                            </div>
                          </div>
                        </td>
                      </td>
                
                    </tr>
                    </tbody>
                  @endforeach
                  
                  <tfoot>
                  <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Time</th>
                   
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
 

